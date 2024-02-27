@extends('layouts.app')

@section('page-title', 'home')

@section('main-content')
<h1>
    trains
</h1>

<h2>
  <div class="row">
      @foreach ($trains as $index => $train)
          <div class="container bg-success">
              <div class="card">

                  <div class="card-body">

                      <ul>

                        <li>
                          {{ $train->stazione_partenza }}
                        </li>  
  
                        <li>
                          {{ $train->stazione_arrivo }}
                        </li>
                          
  
                        <li>
                          {{ $train->orario_partenza }}
                        </li>
                          
                        <li>
                          {{ $train->orario_arrivo }}
                        </li>

                      </ul>
                      
                        

                     
                        
                      

                      <a href="{{ route('trains.show', ['id' => $train->id]) }}" class="btn btn-primary">
                        Vai al film
                      </a>

                      
                  </div>
              </div>
          </div>
      @endforeach
  </div>
</h2>
@endsection