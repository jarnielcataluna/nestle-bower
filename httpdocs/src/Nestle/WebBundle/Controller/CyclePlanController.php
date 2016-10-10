<?php

namespace Nestle\WebBundle\Controller;

use Aws\S3\S3Client;
use Nestle\CoreBundle\Model\NestleNestleCyclePlans;
use Nestle\CoreBundle\Model\NestleNestleCyclePlansPeer;
use Nestle\CoreBundle\Model\NestleNestleDistributors;
use Nestle\CoreBundle\Model\NestleNestleDistributorsPeer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Nestle\CoreBundle\Utils\PropelrrConstant as C;
use Nestle\CoreBundle\Utils\PropelrrUploader as UP;
class CyclePlanController extends Controller
{

    public function indexAction()
    {
        $user = $this->getUser();

        $cyclePlan = NestleNestleCyclePlansPeer::getAll();

        return $this->render('NestleWebBundle:CyclePlan:index.html.twig', array(
            'user' => $user,
            'cyclePlan' => $cyclePlan
        ));
    }

    public function addCyclePlanAction()
    {
        $user = $this->getUser();
        $cyclePlan = NestleNestleCyclePlansPeer::getAll();

        $request = $this->getRequest();

        if ($request->getMethod() == 'POST') {
            $params = $request->request->all();

            $cpTitle = $params["cp_title"];
            $cpStatus = $params["cp_status"];
            $cpDate = $params["cp_date"];
            $newCp = new NestleNestleCyclePlans();
            $newCp->setTitle($cpTitle);
            $newCp->setStatus($cpStatus);
            $newCp->setDate($cpDate);

            $bucket = 'nestle-bower-image-hosting';
            $keyname = 'AKIAITYEZ5N4YWEYTVWQ';
            $filepath = 'cycle-plans';

            $s3 = S3Client::factory([
                'region' => 'ap-southeast-1',
                'version' => 'latest'
            ]);

            $prod = $request->files->get('cp_file');

            if (!$_FILES['image']['error'] > 0) {

                try {

                    $result = $s3->putObject(array(
                        'Bucket' => $bucket,
                        'Key' => "cycle-plans/" . $_FILES['cp_file']['name'],
                        'Body' => fopen($prod->getPathName(), 'rb'),
                        'ContentType' => $_FILES['cp_file']['type'],
                        'StorageClass' => 'STANDARD',
                        'ACL' => 'public-read'
                    ));

                    // Print the URL to the object.
                    echo $result['ObjectURL'] . "\n";
                } catch (S3Exception $e) {
                    echo $e->getMessage() . "\n";
                }

                if (isset($_FILES['cp_file']['name'])) {
                    $newCp->setLink($_FILES['cp_file']['name']);
                }
            }

            $newCp->save();
            return $this->redirect($this->generateUrl('nestle_web_cycle_plan'));

        }
        return $this->render('NestleWebBundle:CyclePlan:cyclePlanAdd.html.twig', array(
            'user' => $user,
            'cyclePlan' => $cyclePlan
        ));
    }

    public function profileCyclePlanAction($id)
    {
        $user = $this->getUser();
        $cyclePlan = NestleNestleCyclePlansPeer::retrieveByPK($id);
        $title = $cyclePlan->getTitle();
        $date = $cyclePlan->getDate();
        $status = $cyclePlan->getStatus();
        $link = $cyclePlan->getLink();


        return $this->render('NestleWebBundle:CyclePlan:cyclePlanView.html.twig', array(
            'user' => $user,
            'cyclePlan' => $cyclePlan,
            'title' => $title,
            'date' => $date,
            'status' => $status,
            'link' => $link

        ));
    }

    public function editCyclePlanAction($id)
    {
        $cyclePlan = NestleNestleCyclePlansPeer::retrieveByPK($id);
        $user = $this->getUser();

        $request = $this->getRequest();

        if ($request->getMethod() == 'POST') {
            $params = $request->request->all();

            $cpTitle = $params["cp_title"];
            $cpStatus = $params["cp_status"];
            $cpDate = $params["cp_date"];


            $cyclePlan->setTitle($cpTitle);
            $cyclePlan->setStatus($cpStatus);
            $cyclePlan->setDate($cpDate);


            if (!$_FILES['cp_file']['error'] > 0) {
                $targetDir = $request->server->get('DOCUMENT_ROOT') . C::DIR_CYCLE_PLAN;
                $file = $_FILES['cp_file'];
                $preName = 'cp_file';
                $image = UP::upload($targetDir, $file, $preName);

                if (isset($image['name'])) {
                    $cyclePlan->setLink($image['name']);

                }

            }

            $cyclePlan->save();
            return $this->redirect($this->generateUrl('nestle_web_cycle_plan'));

        }
        return $this->render('NestleWebBundle:CyclePlan:cyclePlanEdit.html.twig', array(
            'user' => $user,
            'cyclePlan' => $cyclePlan
        ));
    }



    public function deleteCyclePlanAction($id)
    {
        $cyclePlan = NestleNestleCyclePlansPeer::retrieveByPK($id);

        if (!empty($cyclePlan)) {
            $cyclePlan->delete();
        }

        $this->get('session')->getFlashBag()->add('notice', 'Successfully Deleted!');
        return $this->redirect($this->generateUrl('nestle_web_cycle_plan'));
    }

}
