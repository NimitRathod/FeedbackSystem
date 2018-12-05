<!-- Left Panel -->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow " data-scroll-to-active="true">
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
      <!-- <li class=" nav-item @if($menu == '') {{ 'active' }}@endif">
        <a class="dropdown-item" href="{{ url('/admin') }} ">
          <i class="la la-home"></i>
          Dashboard
        </a>
      </li> -->
      <li class=" navigation-header">
        <span data-i18n="nav.category.layouts">Academic</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="Layouts"></i>
      </li>
      <li class=" nav-item @if($menu == 'department' || $menu == 'program' || $menu == 'classes' || $menu == 'subject' || $menu == 'fuculties') {{ 'active' }}@endif">
        <a href="#">
          <i class="la la-bank"></i>
          <span class="menu-title" data-i18n="nav.dash.main">
            Academic
          </span>
        </a>
        <ul class="menu-content">
          <li class="@if($menu == 'department') {{ 'active' }}@endif">
            <a class="menu-item" href="{{ route('department.index') }}" data-i18n="department.index" >
              <i class="la la-home"></i>
              Department
            </a>
          </li>
          <li class="@if($menu == 'program') {{ 'active' }}@endif">
            <a class="menu-item" href="{{ route('program.index') }}" data-i18n="nav.dash.crypto">
              <i class="la la-leanpub"></i>
              Program
            </a>
          </li>
          <li class="@if($menu == 'classes') {{ 'active' }}@endif">
            <a class="menu-item" href="{{ route('classes.index') }}" data-i18n="nav.dash.crypto">
              Classes
            </a>
          </li>
          <li class="@if($menu == 'subject') {{ 'active' }}@endif">
            <a class="menu-item" href="{{ route('subject.index') }}"  data-i18n="nav.dash.crypto">
              <i class="la la-book"></i>
              Subjects
            </a>
          </li>
        </ul>
      </li>
      <li class=" nav-item">
        <a class="dropdown-item" href="@if($menu == 'subject') {{ 'active' }}@endif">
          <i class="la la-group"></i>
          Role
        </a>
      </li>
      <li class=" nav-item @if($menu == 'fuculties') {{ 'active' }}@endif">
        <a class="dropdown-item" href="#Fuculties">
          <i class="la la-group"></i>
          Fuculties
        </a>
      </li>
    </ul>
  </div>
</div>