@extends('admin.layouts.app-master')

@section('content')
	<div class="bg-light p-5 rounded">
		<h1>Category</h1>
		<a class="btn btn-lg btn-primary" href="{{ route('admin.category.add') }}" role="button">Thêm mới</a>

		<div class="card mt-5">
				<div class="card-header">
					<div class="d-flex justify-content-between">
						<div class="p-2">
              <div class="d-flex">
                <div class="p-2">
                  <h2 class="mr-5">Cosmetic</h2>
                </div>
                <!-- <div class="p-2">
                  <a href="{{ route('admin.category') }}" class="btn btn-primary ml-5" tabindex="-1" role="button" aria-disabled="true">Add</a>
                </div> -->
              </div>
            </div>
						<div class="p-2">
							<a class="fs-3" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
              <i class="bi bi-chevron-down"></i>
              </a>
							</div>
					</div>				
				</div>

				<div class="card-body collapse" id="collapseExample">
          <table class="table table-striped table-bordered">
            <tr>
              <th class="">Product Name</th>
              <th>Price</th>
            </tr>

            <tr>
              <td>Cosmetic 1</td>
              <td>125,500VND</td>
            </tr>

            <tr>
              <td>Cosmetic 2</td>
              <td>125,500VND</td>
            </tr>

            <tr>
              <td>Cosmetic 3</td>
              <td>125,500VND</td>
            </tr>
          </table>
				</div>
		</div>

    <div class="card mt-5">
				<div class="card-header">
					<div class="d-flex justify-content-between">
						<div class="p-2">
              <div class="d-flex">
                <div class="p-2">
                  <h2 class="mr-5">Clothes</h2>
                </div>
                <!-- <div class="p-2">
                  <a href="{{ route('admin.category') }}" class="btn btn-primary ml-5" tabindex="-1" role="button" aria-disabled="true">Add</a>
                </div> -->
              </div>
            </div>
						<div class="p-2">
							<a class="fs-3" data-bs-toggle="collapse" href="#collapseCloth" role="button" aria-expanded="false" aria-controls="collapseCloth">
              <i class="bi bi-chevron-down"></i>
              </a>
							</div>
					</div>				
				</div>

				<div class="card-body collapse" id="collapseCloth">
          <table class="table table-striped table-bordered">
            <tr>
              <th class="">Name</th>
              <th>Price</th>
            </tr>

            <tr>
              <td>Cloth 1</td>
              <td>125,500VND</td>
            </tr>

            <tr>
              <td>Cloth 2</td>
              <td>125,500VND</td>
            </tr>

            <tr>
              <td>Cloth 3</td>
              <td>125,500VND</td>
            </tr>
          </table>

          <div class="d-flex justify-content-center">
            <nav aria-label="Page navigation example" class="">
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link disabled" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&lt;</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&gt;</span>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
				</div>
		</div>

	</div>
@endsection