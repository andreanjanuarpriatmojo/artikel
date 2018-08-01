@extends('layouts.admin')

@section('title')
Admin Page
@endsection

@section('content')

    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-home"></i> Dashboard</h3>
          </div>
          <div class="col-lg-10">
              <div class="panel panel-default">
                  <div class="panel-heading"></div>
                  <div class="panel-body">			
					<form role="form" method="post">
						<div class="form-group">
							<textarea class="form-control" rows="10" data-uk-htmleditor><h1>Heading</h1>
					
								<p>Lorem ipsum dolor sit <strong>amet</strong>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <a href="">This is a link</a></p>
								
								<ul>
								    <li>Item</li>
								    <li>Item</li>
								    <li>Item</li>
								</ul>
								
								<h2>Heading</h2>
								
								<p>Ut enim ad <em>minim</em> veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
							</textarea>
						</div>
					</form>
                  </div>
              </div>
          </div>
        </div>
      </section>
    </section>

@endsection