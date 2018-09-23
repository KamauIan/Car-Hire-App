@extends('layouts.Report')

@section('content')

<style>

body {background-image:url('/img/background (2).jpg');
        background-color:#cccccc;
        /*background-position: center;*/
        background-attachment:fixed;
        background-repeat:no-repeat;
        background-size:100%;
        transparent:25%;

                    }

                        </style>
<div class="container">
    
        <li>
            <form class="navbar-form navbar-right" role="search">
                <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
                <button type="submit" class=" form-control glyphicon glyphicon-search btn btn-primary"></button>
                </div>
                
            </form>
    </li>
    <div class="container">
        <h1 style="color:white; font:bold 59px arial,sans-serif; position:absolute; left:40%; top:47%;">REPORTS<hr></h1>
    </div>



</div>

@endsection
