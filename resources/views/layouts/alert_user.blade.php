      @if ($message1 = Session::get('success'))
       <div class="col">
       <div class="alert alert-success"> <i class="ti-user"></i> {{ session('success') }} <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
      </div>
      </div>
      <div class="w-100"></div>
       @endif
      
      <div class="col">
      @if ($message2 = Session::get('failed'))   
       <div class="alert alert-warning"> <i class="ti-user"></i> {{ session('failed') }} <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
      </div>
      @endif
      </div>
   

    
     
       

     