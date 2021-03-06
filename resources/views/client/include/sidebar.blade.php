<ul class="page-sidebar-menu page-sidebar-menu-hover-submenu1" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
    <!-- <li class="heading">
        <h3>{{__('Menu List')}}</h3>
    </li> -->
    <?php
    $user_group_id = Auth::user()->sys_group_id;
    $group_roles = getRolesByGroupId($user_group_id);
    $group_roles = $group_roles->toArray();
    $group_roles = array_column($group_roles,'uri');
    $menus = \App\Model\Role\SysMenu::where('status',1)->orderBy('order')->get()->toArray();
    $active_url = \App\Model\Role\SysMenu::where('status',1)->where('url',request()->route()->uri)->first();
    if(empty($active_url))
        {
            $active_ids=[];
        }
    elseif(empty($active_url->parent_id))
    {
        $active_ids =[$active_url->id];
    }else{
        $childParentArray = buildChildParent($menus);
        $active_ids = getActiveNodes($childParentArray,$active_url->id);
    }

    $tree = buildTree($menus,$group_roles);
    print_tree_menu($active_ids,$tree);
    ?>

</ul>
<?php
function print_tree_menu($active_ids,$menus,$self=false){
    foreach ($menus as $menu)
    {
         $is_active = in_array($menu['id'],$active_ids)?'active':'';
        if(!isset($menu['sub_menu']))
        {

            ?>
            <li class="{{$is_active}}" >
                <a href="{{url($menu['url'])}}" data-url="/{{$menu['url']}}" class="waves-effect {{$is_active}}">
                    <i class="{{$menu['icon']}}"></i>
                    <span class="title">{{$menu['title']}} </span>
                </a>
            </li>
            <?php
        }
        else
        {
        ?>
        <li class="{{$is_active}}" >
            <a href="javascript:;" title="{{$menu['alt_title']}}">
                <i class="{{$menu['icon']}}"></i>
                <span class="title">{{$menu['title']}}</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <?php
                print_tree_menu($active_ids,$menu['sub_menu'],true)
                ?>
            </ul>
        </li>
        <?php
        }
    }
    if($self)
    {
        return 0;
    }
}
//function buildAndPrintTree($tree,$group_roles,$parent=null){
//    if(count($tree)>0){
//        foreach ($tree as $key=>$node){
//            if($node['parent_id']==$parent&&$node['status']==1){
//                $url = $node['url'];
//                $plus_sign = '';
//                $is_active = $node['url']==request()->route()->uri?'active':'';
//                if(empty($url)){
//                    $url = 'javascript:void(0);';
//                    $plus_sign='<span class="pull-right"><i class="md md-add"></i></span>';
//                }
//                elseif(filter_var($url, FILTER_VALIDATE_URL)==false)
//                    $url = url($url);
//                unset($tree[$key]);
//                echo "<li class='$is_active'>";
//                echo '<a title="'.$node['alt_title'].'" href="'.$url.'" class="waves-effect "><i class="'.$node['icon'].'"></i><span>'.$node['title'].'</span><span class="pull-right">'.$plus_sign.'</span></a>';
//                echo '<ul>';
//                buildAndPrintTree($tree,$group_roles,$node['id']);
//                echo '</ul>';
//                echo '</li>';
//            }
//        }
//    }
//}
?>
