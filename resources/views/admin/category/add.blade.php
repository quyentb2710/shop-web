@extends('admin.layouts.app-master')

@section('content')
  <div class="bg-light p-5 rounded">
    <div class="row needs-validation" novalidate>
      <div class="col-md-10 position-relative">
        <h1>Add Category</h1>
      </div>
      <div class="col-md-2 position-relative">
        <a href="{{ route('admin.category') }}" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="true">back</a>
      </div>
  
    </div>
        
        

        <form class="row g-3 needs-validation" method="post" action="{{ route('admin.category.add') }}">
          <div class="row border-bottom pb-2 mt-5">
              <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Type</label>
              <div class="col-sm-5">
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                  <option selected>Open this select menu</option>
                  <option value="1">Cosmetic</option>
                  <option value="2">Clothes</option>
                  <option value="3">Food</option>
                </select>
              </div>
          </div>

          <div class="row border-bottom pb-2 mt-5">
              <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Name" required name="category_name">
                <div class="invalid-feedback">
                    Please choose a username.
                </div>
              </div>
          </div>

          <div class="row border-bottom pb-2 mt-5">
              <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Price</label>
              <div class="col-sm-2">
                <input type="number" class="form-control form-control-lg" id="colFormLabelLg" placeholder="1000" required name="category_name">
                
              </div>
          </div>

          <div class="row border-bottom pb-2 mt-5">
              <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Image</label>
              <div class="col-sm-5">
                <input class="form-control" type="file" id="formFile">
              </div>
          </div>

          <div class="row border-bottom pb-2 mt-5">
              <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Description</label>
              <div class="col-sm-10">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
          </div>

            
          <div class="col-12">
              <button class="btn btn-primary" type="submit">Thêm mới</button>
          </div>
        </form>
        
        
    </div>
@endsection