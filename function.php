<?php
if ( ! defined('__TYPECHO_ROOT_DIR__')) {
    exit;
}

// 获取博客名称
function getBolgName(){
    // 获取Widget_Archive对象
    // 获取选项对象
    $options = Typecho_Widget::widget('Widget_Options');

    // 获取博客名称
    $blogName = $options->title;
    echo $blogName;
}

// 主题可视化配置
function themeConfig($form)
{
    echo $form;
    $logoUrl = new \Typecho\Widget\Helper\Form\Element\Text(
        'logoUrl',
        null,
        null,
        _t('站点 LOGO 地址'),
        _t('在这里填入一个图片 URL 地址, 以在网站标题前加上一个 LOGO')
    );

    $form->addInput($logoUrl);

    $sidebarBlock = new \Typecho\Widget\Helper\Form\Element\Checkbox(
        'sidebarBlock',
        [
            'ShowRecentPosts'    => _t('显示最新文章'),
            'ShowRecentComments' => _t('显示最近回复'),
            'ShowCategory'       => _t('显示分类'),
            'ShowArchive'        => _t('显示归档'),
            'ShowOther'          => _t('显示其它杂项')
        ],
        ['ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowOther'],
        _t('侧边栏显示')
    );

    $form->addInput($sidebarBlock->multiMode());
}

//主题themeInit函数
function themeInit($archive) {
    echo $archive;
}