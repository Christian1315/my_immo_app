<div>
    <style>
        input {
            font-weight: bold !important;
            font-size: 30px;
        }

        .card{
            border-radius: 30px 0px!important;
            margin: 10px;
        }
    </style>

    <h4 class="">Total: <span class="badge bg-light border text-red"> {{count($allAgenciesAccounts)}} </span></h4>
    <div class="row">
        @foreach($allAgenciesAccounts as $account)
        <div class="col-sm-3">
            <div class="card shadow-lg">
                <div class="card-body"><h5 class="card-title text-red">{{$account['name']}}</h5>
                    <p class="card-text">{{substr($account['description'],0,20)}} ...</p>
                    <h5 class="">Plafond: <strong class="text-red"> {{number_format($account["plafond_max"],2,"."," ")}} </strong> </h5>
                    <em>
                        <input disabled type="text" class="form-control" value="Solde :{{number_format($principalAccounts?0:$account['agency_current_sold'],2,'.',' ')}}">
                    </em>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>