<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'nestle_web_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nestle\\WebBundle\\Controller\\MainController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_web_leads_data_ajax' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nestle\\WebBundle\\Controller\\MainController::leadsDataAjaxAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/lead-data',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_web_leads_data_table_ajax' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nestle\\WebBundle\\Controller\\MainController::leadsDataTableAjaxAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/lead-data-table',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_web_leads_info' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Nestle\\WebBundle\\Controller\\MainController::leadInfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/sales/transaction',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_web_get_exported_data' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nestle\\WebBundle\\Controller\\MainController::getExportDataAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sales/get-export-data',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_web_account_leads' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nestle\\WebBundle\\Controller\\AccountsController::accountsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/bow/accounts',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_web_account_leads_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nestle\\WebBundle\\Controller\\AccountsController::accountsProfileAddAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/bow/accounts/add/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_web_account_leads_profile' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Nestle\\WebBundle\\Controller\\AccountsController::accountsProfileAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/bow/accounts/profile',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_web_account_leads_profile_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Nestle\\WebBundle\\Controller\\AccountsController::accountsProfileEditAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/bow/accounts/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_web_account_leads_table' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nestle\\WebBundle\\Controller\\AccountsController::accountsTableAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/bow/accounts/table',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_web_account_leads_table_data' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nestle\\WebBundle\\Controller\\AccountsController::accountsTableDataAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/bow/accounts/table-data',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_web_account_import_data' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nestle\\WebBundle\\Controller\\AccountsController::processCsvAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/bow/accounts/import',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_web_account_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Nestle\\WebBundle\\Controller\\AccountsController::accountsDeleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/bow/account/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_web_bower' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nestle\\WebBundle\\Controller\\BowerController::bowersAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/bow/bowers',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_web_bower_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nestle\\WebBundle\\Controller\\BowerController::bowerAddAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/bow/bowers/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_web_bower_profile' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Nestle\\WebBundle\\Controller\\BowerController::bowerProfileAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/bow/bowers/profile',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_web_bower_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Nestle\\WebBundle\\Controller\\BowerController::bowerEditAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/bow/bowers/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_web_bower_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Nestle\\WebBundle\\Controller\\BowerController::bowerDeleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/bower/bowers/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_web_bower_table' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nestle\\WebBundle\\Controller\\BowerController::bowersTableAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/bow/bowers/table',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_web_bower_table_data' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nestle\\WebBundle\\Controller\\BowerController::bowersTableDataAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/bow/bowers/table-data',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_web_bower_import_data' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nestle\\WebBundle\\Controller\\BowerController::processCsvAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/bow/bowers/import-data',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_web_promo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nestle\\WebBundle\\Controller\\PromoController::promosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/bow/promo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_web_promo_table' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nestle\\WebBundle\\Controller\\PromoController::promoTableAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/bow/promo/table',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_web_promo_table_data' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nestle\\WebBundle\\Controller\\PromoController::promoTableDataAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/bow/promo/table-data',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_web_promo_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nestle\\WebBundle\\Controller\\PromoController::promoAddAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/bow/promo/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_web_promo_view' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Nestle\\WebBundle\\Controller\\PromoController::promoViewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/bow/promo/view',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_web_promo_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Nestle\\WebBundle\\Controller\\PromoController::promoEditAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/bow/promo/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_web_promo_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Nestle\\WebBundle\\Controller\\PromoController::promoDeleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/bow/promo/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_web_promo_import' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nestle\\WebBundle\\Controller\\PromoController::processCsvAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/bow/promo/import-data',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_web_products' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nestle\\WebBundle\\Controller\\ProductController::productsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/bow/products',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_web_product_table' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nestle\\WebBundle\\Controller\\ProductController::productTableAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/bow/product/table',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_web_product_table_data' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nestle\\WebBundle\\Controller\\ProductController::productTableDataAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/bow/product/table-data',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_web_product_import_data' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nestle\\WebBundle\\Controller\\ProductController::processCsvAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/bow/product/import-data',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_web_product_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nestle\\WebBundle\\Controller\\ProductController::productAddAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/bow/products/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_web_product_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Nestle\\WebBundle\\Controller\\ProductController::productEditAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/bow/products/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_web_product_view' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Nestle\\WebBundle\\Controller\\ProductController::productViewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/bow/product/view',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_web_product_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Nestle\\WebBundle\\Controller\\ProductController::productDeleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/bow/product/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_web_distributor_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nestle\\WebBundle\\Controller\\DistributorController::distributorViewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/bow/distributor',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_web_distributor_fetch_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nestle\\WebBundle\\Controller\\DistributorController::distributorListAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/bow/distributor/get',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_web_distributor_manage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nestle\\WebBundle\\Controller\\DistributorController::distributorManageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/bow/distributor/manage',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_web_distributor_delete' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nestle\\WebBundle\\Controller\\DistributorController::distributorDeleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/bow/distributor/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_web_cycle_plan' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nestle\\WebBundle\\Controller\\CyclePlanController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cycle-plan',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_web_cycle_plan_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nestle\\WebBundle\\Controller\\CyclePlanController::addCyclePlanAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cycle-plan/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_web_bower_cycle_plan_profile' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Nestle\\WebBundle\\Controller\\CyclePlanController::profileCyclePlanAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/cycle-plan/profile',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_web_cycle_plan_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Nestle\\WebBundle\\Controller\\CyclePlanController::editCyclePlanAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/cycle-plan/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_web_cycle_plan_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Nestle\\WebBundle\\Controller\\CyclePlanController::deleteCyclePlanAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/cycle-plan/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_mobile_bower_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nestle\\MobileBundle\\Controller\\MainController::bowerLoginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/mobile/bower/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_mobile_bower_accounts' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nestle\\MobileBundle\\Controller\\MainController::retrieveMcpAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/mobile/bower/accounts',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_mobile_bower_products' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nestle\\MobileBundle\\Controller\\MainController::retrieveProductsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/mobile/bower/products',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_mobile_bower_promo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nestle\\MobileBundle\\Controller\\MainController::retrievePromoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/mobile/bower/promos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_mobile_bower_invoice_callback' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nestle\\MobileBundle\\Controller\\MainController::receiveSalesReportAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/mobile/bower/invoice/callback',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_mobile_bower_account_block' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nestle\\MobileBundle\\Controller\\MainController::blockAccountLoginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/mobile/bower/login/block',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_mobile_bower_forgot_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nestle\\MobileBundle\\Controller\\MainController::forgotPasswordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/mobile/bower/login/forgot-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_mobile_bower_cycle_plan' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nestle\\MobileBundle\\Controller\\MainController::retrieveCyclePlansAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/mobile/bower/cycle-plan',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nestle_core_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nestle\\CoreBundle\\Controller\\CoreController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (    0 => 'trailingSlash',  ),  1 =>   array (    '_controller' => 'Nestle\\CoreBundle\\Controller\\CoreController::loginAction',    'trailingSlash' => '/',  ),  2 =>   array (    'trailingSlash' => '[/]{0,1}',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '',      2 => '[/]{0,1}',      3 => 'trailingSlash',    ),    1 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_security_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'error403' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nestle\\CoreBundle\\Controller\\CoreController::forbiddenAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/forbidden',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}