@extends('layout.app')

@section('content')
<br>
<div class="container">
    <br>  
        
        <form action="/kalkulator" method="post">
            @csrf
        <div class="cand">
            <div class="card-header">
                <h5>kalkulator</h5>
                <input type="number" name="first" class="form-control">
            </div>
            <br>
            <div class="col-md-3">
                <input type="number" name="second" class="form-control">
            </div>
            <br>
            <div class="col-md-3">
                <select name="operasi" class="form-control">
                    <option selected>oparasi</option>
                    <option value="tambah"> tamabah (+) </option>
                    <option value="kurang"> kurang (-) </option>
                    <option value="bagi"> bagi (/) </option>
                    <option value="kali"> kali (*) </option>
                </select> 
            </div>
            <br>
            <div class="col-md-3">
                <button type="submit" class="btn btn -info">cari hasil</button>
            </div>
            @if (isset($hasil))

        </div>
            hasilnya <b>{{$hasil}}</b>
    </div>
    @endif
    </form>
</div>
    </div>
@endsection

