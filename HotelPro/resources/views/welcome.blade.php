@extends('layouts.app')

@section('content')

<style>
  

        div, a {
            font-weight: bold;
        }

        .buttonstyle {
            font: bold 30px Arial;
            text-decoration: none;
            background-color: #f4c8ef;
            color: #ffffff;
            padding: 10px 10px 10px 10px;
            border-top: 1px solid #e200c8;
            border-right: 1px solid #910080;
            border-bottom: 1px solid #910080;
            border-left: 1px solid #e200c8;
            margin-left:24px;
        }

        .panel-body {
            background-color: #ffffff;
            height:200px;
            font-color: #ffffff!important;
        }

        .panel-heading {
            color: #ffffff!important;
            background-color: #000000!important;
        }


    </style>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default" style="border: 2px solid #e200c8">
                <div class="panel-heading">Welcome To The Hotel</div>

                <div class="panel-body1" style="height: 100px;">
                    
                </div>
                <div class="panel-body">
                    <a id="WB" href='http://localhost:8000/makeTask' class="buttonstyle"> Register New Task</a>
                    <a id="WB" href='http://localhost:8000/tasks' class="buttonstyle"> View Tasks</a>
                    <a id="WB" href='http://localhost:8000/users' class="buttonstyle"> View Registered Users</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
