@extends('admin.courses.parent')


        <!-- fact-area-start -->
<section class="container">
   <div class="row">
      <div class="col-lg-3">
         <!-- dashboard-menu-area-start -->
         <div class="tpd-user-sidebar">
            <div class="tp-user-wrap">
               <div class="tp-user-menu">
                  <nav>
                     <ul>
                        <li class="tp-user-menu-title">Welcome</li>
                        <li>
                           <a class="active" href="instructor-dashboard.html">
                            <span>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path opacity="0.4" d="M16.0041 5.216V1.584C16.0041 0.456 15.4921 0 14.2201 0H10.9881C9.7161 0 9.2041 0.456 9.2041 1.584V5.208C9.2041 6.344 9.7161 6.792 10.9881 6.792H14.2201C15.4921 6.8 16.0041 6.344 16.0041 5.216Z" fill="currentColor"/>
                                   <path d="M16.0041 14.216V10.984C16.0041 9.71195 15.4921 9.19995 14.2201 9.19995H10.9881C9.7161 9.19995 9.2041 9.71195 9.2041 10.984V14.216C9.2041 15.488 9.7161 16 10.9881 16H14.2201C15.4921 16 16.0041 15.488 16.0041 14.216Z" fill="currentColor"/>
                                   <path d="M6.8 5.216V1.584C6.8 0.456 6.288 0 5.016 0H1.784C0.512 0 0 0.456 0 1.584V5.208C0 6.344 0.512 6.792 1.784 6.792H5.016C6.288 6.8 6.8 6.344 6.8 5.216Z" fill="currentColor"/>
                                   <path opacity="0.4" d="M6.8 14.216V10.984C6.8 9.71195 6.288 9.19995 5.016 9.19995H1.784C0.512 9.19995 0 9.71195 0 10.984V14.216C0 15.488 0.512 16 1.784 16H5.016C6.288 16 6.8 15.488 6.8 14.216Z" fill="currentColor"/>
                                </svg>
                            </span>
                              Dashboard
                           </a>
                        </li>
                        <li>
                           <a href="instructor-profile.html">
                            <span>
                                <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.4" d="M7.98015 8.78062C10.4049 8.78062 12.3705 6.81501 12.3705 4.39031C12.3705 1.96561 10.4049 0 7.98015 0C5.55545 0 3.58984 1.96561 3.58984 4.39031C3.58984 6.81501 5.55545 8.78062 7.98015 8.78062Z" fill="currentColor"/><path d="M7.98158 10.9755C3.58249 10.9755 0 13.9258 0 17.5609C0 17.8068 0.193174 18 0.439031 18H15.5241C15.77 18 15.9632 17.8068 15.9632 17.5609C15.9632 13.9258 12.3807 10.9755 7.98158 10.9755Z" fill="currentColor"/>
                                </svg>
                            </span>
                              My Profile
                           </a>
                        </li>
                        <li class="">
                           <a href="">
                            <span>
                                <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.4" d="M13.4349 9.71387V13.9033C13.4349 14.9826 12.593 16.1383 11.581 16.4782L8.86831 17.379C8.3921 17.5404 7.61825 17.5404 7.15054 17.379L4.43782 16.4782C3.41736 16.1383 2.58398 14.9826 2.58398 13.9033L2.59249 9.71387L6.35118 12.1613C7.26959 12.7646 8.78328 12.7646 9.70169 12.1613L13.4349 9.71387Z" fill="currentColor"/><path d="M14.7945 4.29218L9.70074 0.952512C8.78233 0.349163 7.26865 0.349163 6.35023 0.952512L1.23093 4.29218C-0.41031 5.35441 -0.41031 7.75931 1.23093 8.83004L2.59154 9.71382L6.35023 12.1612C7.26865 12.7646 8.78233 12.7646 9.70074 12.1612L13.4339 9.71382L14.5989 8.94901V11.5494C14.5989 11.8978 14.8881 12.1867 15.2367 12.1867C15.5854 12.1867 15.8745 11.8978 15.8745 11.5494V7.36841C16.2147 6.27218 15.866 4.9975 14.7945 4.29218Z" fill="currentColor"/>
                                </svg>
                            </span>
                              Courses
                              <ul class="">
                                 <li><a href="{{route('admin.courses.create')}}"><i class="fa fa-circle-o"></i> Add Course</a></li>
                                 <li><a href="{{route('admin.courses.index')}}"><i class="fa fa-circle-o"></i> View Courses</a></li>
                              </ul>
                           </a>
                        </li>
                     </ul>
                  </nav>
               </div>
            </div>
         </div>
         <!-- dashboard-menu-area-end -->
      </div>
      <div class="col-lg-9">

         <!-- dashboard-content-area-start -->
         <div class="tpd-content-layout">

            <!-- fact-area-start -->
            <section class="tp-fact-wrapper">
               <h1 align="center" class="jumbotron" algin="center">New Courses</h1>

               <table class="table table-bordered bordered-bold table-striped text-center">
                  <thead>
                  <tr class="text-center">
                     <th>id</th>
                     <th>Course</th>
                     <th>Image</th>
                     <th>Description</th>
                     <th>Category</th>
                     <th>price</th>
                     <th>Hours</th>
                     <th>Branch</th>
                     <th>Price Offer</th>
                     <th>Updated_at</th>
                     <th>Created_at</th>
                     <th class="inline-block">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                     @foreach($courses as $course)
                     <tr>
                        <td>{{$course->id}}</td>
                        <td>{{$course->name}}</td>
                        {{--<th width="2"><img src="{{url('/')}}/images/{{ $course->image }}" class="img-thumbnail"></th>--}}
                        <td>{{$course->description}}</td>
                        <td>{{$course->categoryid}}</td>
                        <td>{{$course->price}}</td>
                        <td>{{$course->price_offer}}</td>
                        <td>{{$course->hourse}}</td>
                        <td>{{$course->branch}}</td>
                        <td>{{$course->created_at->diffForHumans()}}</td>
                        <td>{{$course->updated_at->diffForHumans()}}</td>
                        <th style="" class="inline-block">
                           <form style="text-align: center;"  action="{{route('arrivals.destroy', $arrival->id)}}" method="post">
                              {{ csrf_field() }}
                              {{ method_field('DELETE') }}

                              <a href="{{route('admin.courses.edit', $course->id)}}" class="btn btn-warning">Edit</a>
                              <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                           </form>
                        </th>
                     </tr>
                  @endforeach
                  </tbody>
               </table>
            </section>
            <!-- fact-area-end -->

         </div>
         <!-- dashboard-content-area-end -->

      </div>

   </div>


</section>
<!-- fact-area-end -->