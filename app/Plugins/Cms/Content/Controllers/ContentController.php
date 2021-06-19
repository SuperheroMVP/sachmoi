<?php
#App\Plugins\Cms\Content\Controllers\ContentController.php
namespace App\Plugins\Cms\Content\Controllers;

use App\Plugins\Cms\Content\Models\CmsCategory;
use App\Plugins\Cms\Content\Models\CmsContentDescription;
use App\Plugins\Cms\Content\Models\CmsContent;
use App\Http\Controllers\RootAdminController;
use App\Plugins\Cms\Content\AppConfig;

class ContentController extends RootAdminController
{
    public $plugin;
    public function __construct()
    {
        parent::__construct();
        $this->plugin = new AppConfig;
    }

/**
 * [news description]
 * @return [type] [description]
 */
public function category($alias)
{

    $tableCmsContent = (new CmsContent)->getTable();
    $tableCmsContentDescription = (new CmsContentDescription)->getTable();

    $list_entries = CmsContentDescription::leftJoin($tableCmsContent, $tableCmsContentDescription . '.content_id', $tableCmsContent . '.id')
        ->where($tableCmsContentDescription . '.lang', sc_get_locale())->where('status', 1)->get();

    $category_currently = (new CmsCategory)->getDetail($alias, 'alias');
        if ($category_currently) { 
            $entries = (new CmsContent)
            ->getContentToCategory($category_currently->id)
            ->setPaginate()
            ->getData();
        return view(
            $this->plugin->pathPlugin.'::cms_category',
            array(
                'title' => $category_currently['title'],
                'description' => $category_currently['description'],
                'keyword' => $category_currently['keyword'],
                'entries' => $entries,
                'list_entries'=>$list_entries,
                'layout_page' => 'content_list',
            )
        );
    } else {
        return view('templates.' . sc_store('template') . '.notfound',
        array(
            'title' => trans('front.item_not_found_title'),
            'description' => '',
            'keyword' => sc_store('keyword'),
            'msg' => trans('front.item_not_found'),
        )
    );
    }

}

/**
 * Content detail
 *
 * @param   [string]  $alias  [$alias description]
 *
 * @return  [type]          [return description]
 */
public function content($alias)
{
    $entry_currently = (new CmsContent)->getDetail($alias, 'alias');
    if ($entry_currently) {
        $title = ($entry_currently) ? $entry_currently->title : trans('front.not_found');
        return view($this->plugin->pathPlugin.'::cms_entry_detail',
            array(
                'title' => $title,
                'entry_currently' => $entry_currently,
                'description' => $entry_currently['description'],
                'keyword' => $entry_currently['keyword'],
                'og_image' => $entry_currently->getImage(),
                'layout_page' => 'content_detail',
            )
        );
    } else {
        return view('templates.' . sc_store('template') . '.notfound',
            array(
                'title' => trans('front.item_not_found_title'),
                'description' => '',
                'keyword' => sc_store('keyword'),
                'msg' => trans('front.item_not_found'),
            )
        );
    }

}

public function cmsAllNews()
{
    $tableCmsContent = (new CmsContent)->getTable();
    $tableCmsContentDescription = (new CmsContentDescription)->getTable();
    
    $list_entries = CmsContentDescription::leftJoin($tableCmsContent, $tableCmsContentDescription . '.content_id', $tableCmsContent . '.id')
        ->where($tableCmsContentDescription . '.lang', sc_get_locale())->where('status', 1)->take(5)->get();

    // $all_news = CmsContentDescription::leftJoin($tableCmsContent, $tableCmsContentDescription . '.cms_content_id', $tableCmsContent . '.id')
    //     ->where('status', 1)->orderBy('created_at', 'desc')->paginate(9);
        $all_news = CmsContentDescription::leftJoin($tableCmsContent, $tableCmsContentDescription . '.content_id', $tableCmsContent . '.id')
        ->where($tableCmsContentDescription . '.lang', sc_get_locale())->where('status', 1)->take(5)->orderBy('created_at', 'desc')->paginate(9);

    return view($this->plugin->pathPlugin.'::cms_all_news',
        array(
            'title' => 'Tất cả tin tức',
            'all_news' => $all_news,
            'list_entries'=>$list_entries,
        )
    );
}
}
