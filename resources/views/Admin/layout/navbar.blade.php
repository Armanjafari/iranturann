<div class="container-fluid">
  <div class="row">
    <div class="col-lg-3">
      <div class="card p-3 h-100 box-menu">
       <div class="position-absolute admin">
        <span class="">اسماعیل زلفیان</span><br>
        <span class="ml-5">مدیر</span>
      </div>
      <div class="iranturan-logo">
        <img src="{{asset('assets/admin/img/Asset 10iranturan.com.svg')}}" alt="" class=" mr-3" width="100">
      </div>
        <hr style="border: 1px solid #33cccc;">
      <div class="wrapper d-flex mt-4">
        <div class="sidemenu">
            <div class="sidebar" id="sidebar">
                <ul class="navbar-nav text-right">
                    <li class="nav-item"><a href="#" class="nav-link"><span class="text">داشبورد</span></a></li>
                    
                    <a href="#product-manegment" data-toggle="collapse" aria-expanded="false" class="nav-link"><span class="text" id="dropdown-toggle">مدیریت محصول<i class="fas fa-angle-down"></i></span></a>
                    <ul class="collapse list-unstyled" id="product-manegment">
                      <li class="nav-submenu">
                        <a href="{{ route('show.brand.form') }}" class="nav-link" style="color: #787171;"
                  ><span  class="text">مدیریت برند</span></a>
                     </li>
                      <li class="nav-submenu">
                          <a class="nav-link" style="color: #787171;" href="{{ route('show.waranty.form') }}"><span class="text">مدیریت گارانتی</span></a>
                       </li>
                    </ul>
                    <li class="nav-item"><a href="#adminSubmenu" data-toggle="collapse" aria-expanded="false" class="nav-link"><span class="text" id="dropdown-toggle">مدیریت فروشندگان <i class="fas fa-angle-down"></i></span></a>
                    <ul class="collapse list-unstyled" id="adminSubmenu">
                      <li class="nav-under-menu">
                        <a href="" class="nav-link" style="color: #787171;"><span  class="text">ثبت فروشندگان</span></a>
                          </li>
                      <li class="nav-under-menu">
                    <a href="" class="nav-link" style="color: #787171;"><span  class="text">لیست فروشندگان</span></a>
                      </li>
                   </li> 
                      </ul>
                      <li class="nav-item"><a href="Status of orders.html" class="nav-link"><span class="text">مدیریت سفارشات</span></a></li>
                      <li class="nav-item"><a href="#Product-management" data-toggle="collapse" aria-expanded="false" class="nav-link"><span class="text" id="dropdown-toggle">مدیریت کاربران<i class="fas fa-angle-down"></i></span></a>
                        <ul class="collapse list-unstyled" id="Product-management">
                           <li class="nav-submenu">
                              <a  class="nav-link" style="color: #787171;" href="usermangment.html"><span class="text">مدیریت کاربران</span></a>
                           </li>
                            <li class="nav-submenu">
                              <a  class="nav-link" style="color: #787171;" href="userlist.html"><span class="text">لیست کاربران</span></a>
                           </li>
                        </ul>
                        <a href="#Representation-management" data-toggle="collapse" aria-expanded="false" class="nav-link"><span class="text" id="dropdown-toggle">مدیریت نمایندگان<i class="fas fa-angle-down"></i></span></a>
                        <ul class="collapse list-unstyled" id="Representation-management">
                          <li class="nav-submenu">
                            <a class="nav-link" style="color: #787171;" href="
                            Agentmanagment.html"><span class="text">فرم اولیه ثبت نماینده</span></a>
                         </li>
                          <li class="nav-submenu">
                              <a class="nav-link" style="color: #787171;" href="Agentlist.html"><span class="text">لیست نمایندگان</span></a>
                           </li>
                        </ul>
                    <li class="nav-item"><a href="logestic managment.html" class="nav-link" ><span class="text">مدیریت لوجستیک</span></a></li>
                    <li class="nav-item"><a href="Accounting.html" class="nav-link"><span class="text">حسابداری</span></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><span class="text">مدیریت بازخورد</span></a></li>
                 
                </ul>
            </div>
        </div>
        </div>
        </div>
    </div>