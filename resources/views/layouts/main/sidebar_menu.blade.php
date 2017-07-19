<div id="main_menu" role="tablist" aria-multiselectable="true" class="">

  <li class="item {{ isActiveURL('/') }} " >
    <a href=" {{url ('/')}}"><i class="menu_icon fa icon-news"></i> Новости </a>
  </li>

  <div class="item_group">
    <li class="item item_dropdown" role="tab" id="universe">
      <a class="collapsed" data-toggle="collapse" data-parent="#main_menu" href="#collapseUnivrse_item" aria-expanded="false" aria-controls="collapseUnivrse_item"><i class="menu_icon fa icon-universe"></i> Вселенные <i class="menu_icon_dropdown fa fa-chevron-up"></i></a>
    </li>

    <ul id="collapseUnivrse_item" class="collapse item_list" role="tabpanel" aria-labelledby="universe">
      <li class="item">
        <a href="#"><i class="menu_icon fa fa-none"></i> Options 1 </a>
      </li>
      <li class="item">
        <a href="#"><i class="menu_icon fa fa-none"></i> Options 2 </a>
      </li>
      <li class="item">
        <a href="#"><i class="menu_icon fa fa-none"></i> Options 3 </a>
      </li>
    </ul>
  </div>

  <div class="item_group">
    <li class="item item_dropdown" role="tab" id="person">
      <a class="collapsed" data-toggle="collapse" data-parent="#main_menu" href="#collapsePerson_item" aria-expanded="false" aria-controls="collapsePerson_item"><i class="menu_icon fa icon-resume"></i> Персоналии <i class="menu_icon_dropdown fa fa-chevron-up"></i></a>
    </li>

    <ul id="collapsePerson_item" class="collapse item_list" role="tabpanel" aria-labelledby="person">
      <li class="item">
        <a href="#"><i class="menu_icon fa fa-none"></i> Options 1 </a>
      </li>
      <li class="item">
        <a href="#"><i class="menu_icon fa fa-none"></i> Options 2 </a>
      </li>
      <li class="item">
        <a href="#"><i class="menu_icon fa fa-none"></i> Options 3 </a>
      </li>
    </ul>
  </div>

  <li class="item {{ isActiveURL('/about/') }} " >
    <a href="#"><i class="menu_icon fa icon-info"></i> О проекте </a>
  </li>

    <li class="item {{ isActiveURL('/inprogress/') }} " >
    <a href="#"><i class="menu_icon fa fa-terminal"></i> В разработке </a>
  </li>

</div>
