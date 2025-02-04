@extends('admin.courses.parent')

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

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
                                            Categories
                                            <ul class="">
                                                <li><a href="{{route('admin.categories.create')}}"><i class="fa fa-circle-o"></i> Add Category</a></li>
                                                <li><a href="{{route('admin.categories.index')}}"><i class="fa fa-circle-o"></i> View Category</a></li>
                                            </ul>
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

                    <div class="tp-contact-from-box">
                        <h3 class="tp-contact-from-title">Add New Course  👍🏻</h3>
                        <form id="contact-form" method="post" action="{{ route('admin.categories.update', $courseCategories->id) }}" enctype="multipart/form-data">
                            {{--{{ csrf_field() }}--}}
                            @csrf
                            {{ method_field('PATCH') }}
                            <div class="tp-contact-input-form">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="tp-contact-input p-relative">
                                            <label>Category Name</label>
                                            <input type="text" name="name" for="name" value="{{ $courseCategories->name }}">
                                        </div>
                                    </div>
                                    {{-- <div class="col-xl-6 col-lg-6">
                                         <div class="tp-contact-input p-relative">
                                             <label>Category</label>
                                             <input type="text" name="category_id" class="form-control input-lg">
                                         </div>
                                     </div>
                                     <div class="col-xl-6 col-lg-6">
                                         <div class="tp-contact-input p-relative">
                                             <label>Price</label>
                                             <input type="number" name="price" class="form-control input-lg">
                                         </div>
                                     </div>
                                     <div class="col-xl-6 col-lg-6">
                                         <div class="tp-contact-input p-relative">
                                             <label>Offer Price</label>
                                             <input type="number" name="price_offer" class="form-control input-lg">
                                         </div>
                                     </div>
                                     <div class="col-xl-6 col-lg-6">
                                         <div class="tp-contact-input p-relative">
                                             <label>Schedule Time</label>
                                             <input type="time" name="schedule_time" class="form-control input-lg">
                                         </div>
                                     </div>
                                     <div class="col-xl-6 col-lg-6">
                                         <div class="tp-contact-input p-relative">
                                             <label>Course Hours</label>
                                             <input type="time" name="hours" class="form-control input-lg">
                                         </div>
                                     </div>
                                     <div class="col-xl-6 col-lg-6">
                                         <div class="tp-contact-input p-relative">
                                             <label>Branch</label>
                                             <input type="text" name="branch" class="form-control input-lg">
                                         </div>
                                     </div>--}}
                                    {{--<div class="col-xl-6 col-lg-6">--}}
                                    {{--<div class="tp-contact-input p-relative">--}}
                                    {{--<label>Upload Course Photo</label>--}}
                                    {{--<input type="file" name="image" class="form-control input-lg">--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-xl-12">--}}
                                    {{--<div class="tp-contact-input p-relative">--}}
                                    {{--<label>Description</label>--}}
                                    {{--<textarea name="description"></textarea>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    <div class="tp-contact-btn">
                                        <button type="submit" class="tp-btn-inner" href="{{route('admin.categories.index')}}">Save</button>
                                        <p style="display: none;" class="ajax-response text-danger mt-1 mb-0"></p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
                <!-- dashboard-content-area-end -->

            </div>

        </div>


    </section>
    <!-- fact-area-end -->

