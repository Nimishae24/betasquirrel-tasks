@extends('contacts.layout')
@section('content') 
 <head>
    <link href="{{ asset('/css/app1.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
    <body>
        <nav>
          <div class="left-nav img">
            <img src="image/logo.png" alt="logoimge" />
            <h2>One School</h2>
          </div>
          <div class="right-nav img">
            <img src="image/profile.jpg" alt="logoimge" />
          </div>
        </nav>
        <div class="main-container">
          <div class="side-container">
            <ul>
              <ul class="flex">
                <li style="padding: 0px;">
                  <!-- <img src="image/student.png" alt="student" /> -->     
                  <div style="display: flex ;padding:1em;;"  ><i class="fa-solid fa-user" style="padding-top:8px;padding-right:8px;"></i><h6 style="padding:0px">STUDENTS</h6></div>
                  <div style="display: flex ;padding:1em;"  ><i class="fa-solid fa-chalkboard-user" style="padding-top:8px;padding-right:8px;"></i><h6 >STAFF</h6></div>
                  <div style="display: flex ;padding:1em;"  ><i class="fa-solid fa-graduation-cap" style="padding-top:8px;padding-right:8px;"></i><h6 >EXAMS</h6></div>
              </ul>
            </ul>
          </div>
          <div class="font-weight-bold student">
            STUDENTS
            <a href="{{ url('/contact/create') }}" class="btn btn-success btn-sm" title="Add New Contact"  >
                <i class="fa fa-plus" aria-hidden="true"></i> NEW CONTACT
            </a>
            <table class="table mt-5" style="width: 160vh">
              <thead>
                <tr>
                  <th scope="col ">ROLL NO</th>
                  <th scope="col ">First Name</th>
                  <th scope="col ">Last Name</th>
                  <th scope="col ">Branch</th>
                  <th scope="col ">Hostel</th>
                  <th scope="col ">Mobile</th>
                  <th scope="col ">Subject</th>
                  <th scope="col ">Address</th>
                  <th scope="col ">Email</th>
                </tr>
              </thead>
              <tbody>
                @foreach($contacts as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->first_name }}</td>
                                        <td>{{ $item->last_name }}</td>
                                        <td>{{ $item->branch }}</td>
                                        <td>{{ $item->Hostel }}</td>
                                        <td>{{ $item->mobile }}</td>
                                        <td>{{ $item->subject }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->Email }}</td>
                                        <td>
                                            <a href="{{ url('/contact/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/contact/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/contact' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </body>
@endsection