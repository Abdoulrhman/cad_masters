@extends('admin.courses.parent')


        <!-- fact-area-start -->
<section class="container">
   <div class="row">
      @include('admin.layouts.menu')
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
                     <th>Price Offer</th>
                     <th>Branch</th>
                     <th>hours</th>
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
                        <th width="2"><img src="{{asset( '/images/' . $course->image) }}" class="img-thumbnail"></th>
                        <td>{{$course->description}}</td>
                        <td>{{$course->categoryid}}</td>
                        <td>{{$course->price}}</td>
                        <td>{{$course->price_offer}}</td>
                        <td>{{$course->branch}}</td>
                        <td>{{$course->hours}}</td>
                        <td>{{$course->created_at->diffForHumans()}}</td>
                        <td>{{$course->updated_at->diffForHumans()}}</td>
                        <th style="" class="inline-block">
                           <form style="text-align: center;"  action="{{route('admin.courses.destroy', $course->id)}}" method="post">
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