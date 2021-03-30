<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <h2>Customer's List</h2>
    <div class="col-md-4">
  <input type="text" class="form-control" placeholder="Search" wire:model="searchTerm">
    </div>
<div class="row mt-4">
    <div class="col-12">


    <table class=" table table-bordered table-responsive">
    <thead>
      <tr>
        <th>Cons_No</th>
        <th>Town_Name</th>
        <th>Cons_Name</th>
         <th>F_Survey</th>
        <th>Qtr_Name</th>
        <th>Curr_Water</th>
        <th>Water_Surcharge</th>
        <th>Water_Arr</th>
        <th>Water_Recpt</th>
         <th>Curr_Sew</th>
        <th>Sew_Arr</th>
        <th>Sew_Recpt</th>
        
         <th>Curr_Consv	</th>
        <th>Consv_Arr</th>
        <th>Consv_Recpt</th>
        <th>Curr_Fire</th>
         <th>Fire_Arr</th>
        <th>Fire_Recpt</th>
        <th>Bill_Period	</th>

         <th>Issue_Date</th>
        <th>Due_Date</th>
        <th>Paid_Date</th>
        <th>Water_Conn</th>
         <th>Conn_Size</th>
        <th>No_Of_Story</th>
        <th>Plot_type</th>
         <th>Plot_Size</th>
        <th>Flat_Size</th>
        <th>Exampt</th>
        <th>Tot_Units</th>
         <th>Town_Code</th>
        <th>Town_Abr</th>
        <th>Advance_Amount</th>
        <th>Arrear_code</th>
        <th>Filler_blanks</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($customers as $customer)
                
        <tr>
        <td>{{$customer->Cons_No}}</td>
        <td>{{$customer->Town_Name}}</td>
        <td>{{$customer->Cons_Name}}</td>
        <td>{{$customer->F_Survey}}</td>
        <td>{{$customer->Qtr_Name}}</td>
        <td>{{$customer->Curr_Water}}</td>

        <td>{{$customer->Water_Surcharge}}</td>
        <td>{{$customer->Water_Arr}}</td>
        <td>{{$customer->Water_Recpt}}</td>
        <td>{{$customer->Curr_Sew}}</td>
        <td>{{$customer->Sew_Arr}}</td>
        <td>{{$customer->Sew_Recpt}}</td>

        
        <td>{{$customer->Curr_Consv}}</td>
        <td>{{$customer->Consv_Arr}}</td>
        <td>{{$customer->Consv_Recpt}}</td>
        <td>{{$customer->Curr_Fire	}}</td>
        <td>{{$customer->Fire_Arr}}</td>
        <td>{{$customer->Fire_Recpt}}</td>
           
        <td>{{$customer->Bill_Period	}}</td>
        <td>{{$customer->Issue_Date}}</td>
        <td>{{$customer->Due_Date}}</td>
        <td>{{$customer->Paid_Date	}}</td>
        <td>{{$customer->Water_Conn}}</td>
        <td>{{$customer->Conn_Size}}</td>

          <td>{{$customer->No_Of_Story	}}</td>
        <td>{{$customer->Plot_type}}</td>
        <td>{{$customer->Plot_Size}}</td>
        <td>{{$customer->Flat_Size	}}</td>
        <td>{{$customer->Exampt}}</td>
        <td>{{$customer->Tot_Units}}</td>
        
          <td>{{$customer->Town_Code	}}</td>
        <td>{{$customer->Town_Abr}}</td>
        <td>{{$customer->Advance_Amount}}</td>
        <td>{{$customer->Arrear_code	}}</td>
        <td>{{$customer->Filler_blanks}}</td>
  
      </tr>
        @endforeach
   
    </tbody>
   
  </table>
   {{ $customers->links('vendor.livewire.bootstrap') }}
    </div>           
      </div>
</div>
