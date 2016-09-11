<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_product_getall' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\ApiController::productGetAllAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/product/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_product_getone' => array (  0 =>   array (    0 => 'slug',  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\ApiController::productGetOneAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),    1 =>     array (      0 => 'text',      1 => '/api/product',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_product_post' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\ApiController::productPostAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/product/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_store_getall' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\ApiController::storeGetAllAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/store/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_store_getone' => array (  0 =>   array (    0 => 'slug',  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\ApiController::storeGetOneAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),    1 =>     array (      0 => 'text',      1 => '/api/store',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_store_post' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\ApiController::storePostAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/store/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_category_getall' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\ApiController::categoryGetAllAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/category/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_category_getone' => array (  0 =>   array (    0 => 'slug',  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\ApiController::categoryGetOneAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),    1 =>     array (      0 => 'text',      1 => '/api/category',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_category_post' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\ApiController::categoryPostAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/category/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'category_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\CategoryController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/category/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'category_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\CategoryController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/category/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'category_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\CategoryController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/category',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'category_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\CategoryController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/category',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'category_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\CategoryController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/category',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lists_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\ListsController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/lists/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lists_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\ListsController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/lists/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lists_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\ListsController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/lists',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lists_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\ListsController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/lists',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lists_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\ListsController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/lists',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'listsproduct_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\ListsProductController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/listsproduct/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'listsproduct_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\ListsProductController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/listsproduct/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'listsproduct_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\ListsProductController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/listsproduct',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'listsproduct_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\ListsProductController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/listsproduct',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'listsproduct_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\ListsProductController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/listsproduct',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'product_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\ProductController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/product/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'product_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\ProductController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/product/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'product_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\ProductController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/product',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'product_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\ProductController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/product',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'product_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\ProductController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/product',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'society_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\SocietyController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/society/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'society_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\SocietyController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/society/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'society_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\SocietyController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/society',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'society_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\SocietyController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/society',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'society_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\SocietyController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/society',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'store_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\StoreController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/store/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'store_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\StoreController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/store/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'store_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\StoreController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/store',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'store_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\StoreController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/store',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'store_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\StoreController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/store',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'storeproduct_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\StoreProductController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/storeproduct/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'storeproduct_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\StoreProductController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/storeproduct/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'storeproduct_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\StoreProductController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/storeproduct',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'storeproduct_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\StoreProductController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/storeproduct',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'storeproduct_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\StoreProductController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/storeproduct',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'users_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\UsersController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/users/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'users_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\UsersController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/users/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'users_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\UsersController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/users',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'users_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\UsersController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/users',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'users_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'HunterBundle\\Controller\\UsersController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/users',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
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