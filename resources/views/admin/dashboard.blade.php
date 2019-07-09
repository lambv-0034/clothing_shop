@extends('layouts.admin')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-header card-header-warning card-header-icon">
          <div class="card-icon">
              <i class="material-icons">add_shopping_cart</i>
          </div>
          <p class="card-category">Products</p>
          <h3 class="card-title">100</h3>
        </div>
        <div class="card-footer">
          <div class="stats">
              <i class="material-icons">date_range</i> Till now
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-header card-header-success card-header-icon">
          <div class="card-icon">
            <i class="material-icons">store</i>
          </div>
          <p class="card-category">Revenue($)</p>
          <h3 class="card-title">34245</h3>
        </div>
        <div class="card-footer">
          <div class="stats">
            <i class="material-icons">date_range</i> Till now
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-header card-header-danger card-header-icon">
          <div class="card-icon">
            <i class="material-icons">content_copy</i>
          </div>
          <p class="card-category">Categories</p>
          <h3 class="card-title">75</h3>
        </div>
        <div class="card-footer">
          <div class="stats">
            <i class="material-icons">date_range</i> Till now
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-header card-header-info card-header-icon">
          <div class="card-icon">
            <i class="material-icons">account_circle</i>
          </div>
          <p class="card-category">Users</p>
          <h3 class="card-title">245</h3>
        </div>
        <div class="card-footer">
          <div class="stats">
            <i class="material-icons">date_range</i> Till now
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6 col-md-12">
      <div class="card">
        <div class="card-header card-header-warning">
          <h4>Products Stats</h4>
          <p class="card-category">Top 10 best selling products</p>
        </div>
          <div class="card-body table-responsive">
            <table class="table table-hover">
              <thead class="text-warning">
                <th>ID</th>
                <th>Category</th>
                <th>Item</th>
                <th>Designs</th>
                <th>Product</th>
              </thead>
              <tbody>
                <tr>
                    <td>1</td>
                    <td>Women's fashion </td>
                    <td>Áo</td>
                    <td>Áo Cardigan nữ</td>
                    <td>Áo Cardigan hồng</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    <div class="col-lg-6 col-md-12">
      <div class="card">
        <div class="card-header card-header-warning">
          <h4 >Customers Stats</h4>
          <p class="card-category">Top 10 customers spend the most</p>
        </div>
        <div class="card-body table-responsive">
          <table class="table table-hover">
            <thead class="text-warning">
              <th>ID</th>
              <th>Name</th>
              <th>Salary</th>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Dakota Rice</td>
                <td>$36,738</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div> 
<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery('.card-title').counterUp({
            delay: 20,
            time: 1000
        });
    });
</script>
@endsection