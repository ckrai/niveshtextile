
@extends('layouts.app')
@push('style')
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<script src="jquery/1.9.1/jquery.js"></script>
<link rel="stylesheet" href="3.3.6/css/bootstrap.min.css">
<!-- <link href="http://meyerweb.com/eric/tools/css/reset/reset.css" rel="stylesheet" />-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
@endpush
@section('content')

<div class="container">

    <div class="row justify-content-center">
    <div class="col-md-12">

          <div class="form-group" style="margin-top: 24px;">
              <a href="{{ route('superadmin.list') }}" class="btn btn-success">Back</a>
          </div>

          @if(session()->has('message'))
            <p class="btn btn-success btn-block btn-sm custom_message text-left">{{ session()->get('message') }}</p>
          @endif

             @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Sorry!</strong> There were more problems with your input field.<br><br>
                <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
                </ul>
            </div>
            @endif
              
            @if(session('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div> 
            @endif

      <legend style="color: green; font-weight: bold;"> Form
      </legend>
  <body>
      <form id="regForm" action="#" method="post" enctype="multipart/form-data">
          @csrf
          <h4>Title</h4>
      </form>

  <script>

        function openPage(pageName,elmnt,color) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
              tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < tablinks.length; i++) {
              tablinks[i].style.backgroundColor = "";
            }
            document.getElementById(pageName).style.display = "block";
            elmnt.style.backgroundColor = color;
          }
          // Get the element with id="defaultOpen" and click on it
          document.getElementById("defaultOpen").click();

      var currentTab = 0; // Current tab is set to be the first tab (0)
      showTab(currentTab); // Display the current tab

      function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tabcontent");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
          document.getElementById("prevBtn").style.display = "none";
        } else {
          document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
          document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
          document.getElementById("nextBtn").innerHTML = "Next";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
      }

      function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tabcontent");
        // Exit the function if any field in the current tab is invalid:
        //if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
          // ... the form gets submitted:
          document.getElementById("regForm").submit();
          return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
      }

      function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tabcontent");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
          // If a field is empty...
          if (y[i].value == "") {
            // add an "invalid" class to the field:
            y[i].className += " invalid";
            // and set the current valid status to false
            valid = false;
          }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
          document.getElementsByClassName("tablink")[currentTab].className += " finish";
        }
        return valid; // return the valid status
      }

      function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("tablink");
        for (i = 0; i < x.length; i++) {
          x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
      }
  </script>

  <script type="text/javascript">
    document.querySelector('.phone').addEventListener('input', function() { 
    let text=this.value                                                      
    text=text.replace(/\D/g,'')                                             
    if(text.length>3) text=text.replace(/.{3}/,'$&-')                        
    if(text.length>7) text=text.replace(/.{7}/,'$&-')                        
    this.value=text;                                                         
    });

      document.querySelector('.aadhaar').addEventListener('input', function() { 
      let text=this.value                                                      
      text=text.replace(/\D/g,'')                                             
      if(text.length>4) text=text.replace(/.{4}/,'$&-')                        
      if(text.length>9) text=text.replace(/.{9}/,'$&-')                        
      this.value=text; 
    });
  </script>
  <script type="text/javascript">
      $(document).ready(function() {
        $(".btn-success").click(function(){ 
            var lsthmtl = $(".clone").html();
            $(".increment").after(lsthmtl);
        });
        $("body").on("click",".btn-danger",function(){ 
            $(this).parents(".hdtuto control-group lst").remove();
        });
      });
  </script>
  
    </body>
  </div>
  </div>
</div>

@endsection
 