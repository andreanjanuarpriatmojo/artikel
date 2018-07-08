@extends('layouts.auth')

@section('title')
Admin Page
@endsection

@section('content')
<div class="container">
  <!--overview start-->
        <form style="margin-top: 10em">
          <div class="row">
            <div class="col-md-4 col-md-offset-4">
              <div class="panel panel-default">
                <div class="panel-heading"> </div>
                <div class="panel-body">
                  <center><h1><i class="icon_lock_alt"></i></h1></center>
                  <div class="input-group" style="margin-top: 2em;margin-bottom: 1em;">
                    <span class="input-group-addon"><i class="icon_profile"></i></span>
                    <input type="email" class="form-control" placeholder="E-mail" autofocus>
                  </div>
                  <div class="input-group" style="margin-top: 1em;margin-bottom: 1em;">
                    <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                    <input type="password" class="form-control" placeholder="Password">
                  </div>
                  <div class="input-group" style="margin-top: 1em;margin-bottom: 1em;">
                    <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                    <input type="password" class="form-control" placeholder="Confirm Password">
                  </div>
                  <label class="checkbox" style="margin-top: 1em;margin-bottom: 2em;">
                    <input type="checkbox" value="remember-me"> Remember me
                    <span class="pull-right"> <a href="signup.html"> Sudah punya akun?</a></span>
                  </label>
                  <button class="btn btn-primary btn-lg btn-block" type="submit">Register</button>
                </div> 
              </div>
            </div>
          </div>
        </form>
</div>
        

@endsection