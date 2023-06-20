<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  @include('admin.css')
</head>

<body>
  <div class="container-scroller">
    <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">
        <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
          <div class="ps-lg-1">
            <div class="d-flex align-items-center justify-content-between">
              <p class="mb-0 font-weight-medium me-3 buy-now-text">Semoga Harimu Menyenangkan!</p>
              <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0"></a>
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
            <button id="bannerClose" class="btn border-0 p-0">
              <i class="mdi mdi-close text-white me-0"></i>
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Sidebar -->
    @include('admin.sidebar')
    <!-- End Sidebar -->

    <!-- Navbar -->
    @include('admin.navbar')
    <!-- End Navbar -->

    <div class="container-fluid page-body-wrapper">
      <div style="text-align: center; padding-top: 100px; display: inline-block;">
      <table class="table">
        <tr class="table-dark">
            <th style="padding:auto;">Customer Name</th>
            <th style="padding:auto;">Email</th>
            <th style="padding:auto;">Doctor Name</th>
            <th style="padding:auto;">Date</th>
            <th style="padding:auto;">Message</th>
            <th style="padding:auto;">Status</th>
            <th style="padding:auto;">Approved</th>
            <th style="padding:auto;">Canceled</th>
            <th style="padding:auto;">Send Mail</th>
        </tr>
        @foreach($data as $appoint)
        <tr align="center" class="table-dark">
            <td>{{$appoint->name}}</td>
            <td>{{$appoint->email}}</td>
            <td>{{$appoint->doctor}}</td>
            <td>{{$appoint->date}}</td>
            <td>{{$appoint->message}}</td>
            <td>{{$appoint->status}}</td>
            <td>
              <a class="btn btn-success" href="{{url('approved', $appoint->id)}}">Approved</a>
            </td>
            <td>
              <a class="btn btn-danger" href="{{url('canceled', $appoint->id)}}">Canceled</a>
            </td>
            <td>
              <a class="btn btn-primary" href="{{url('emailview', $appoint->id)}}">Send Mail</a>
            </td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>

  <!-- plugins:js -->
  @include('admin.script')
  <!-- End custom js for this page -->
</body>

</html>