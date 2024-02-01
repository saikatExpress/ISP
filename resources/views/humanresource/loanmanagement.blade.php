@extends('layout.adminmaster')

@section('content')
<div class="container">
  <h1 class="text-center">Employee Loan Management</h1>
  <hr>
  <div class="row">
    <div class="col-md-6">
      <div class="form-section">
        <h2>Update Loan Amount</h2>
        <form>
          <div class="form-group">
            <label for="employeeName">Employee Name</label>
            <input type="text" class="form-control" id="employeeName" placeholder="Enter Employee Name">
          </div>
          
          <div class="form-group">
            <label for="updateLoanAmount">Update Loan Amount</label>
            <input type="text" class="form-control" id="updateLoanAmount" placeholder="Enter Updated Loan Amount">
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-section">
        <h2>Add New Loan</h2>
        <form>
          <div class="form-group">
            <label for="employeeName">Employee Name</label>
            <input type="text" class="form-control" id="employeeName" placeholder="Enter Employee Name">
          </div>
        
          <div class="form-group">
            <label for="newLoanAmount">New Loan Amount</label>
            <input type="text" class="form-control" id="newLoanAmount" placeholder="Enter New Loan Amount">
          </div>
          <div class="form-group">
            <label for="loanType">Loan Type</label>
            <select class="form-control" id="loanType">
              <option>Select Loan Type</option>
              <option>Personal Loan</option>
              <option>Home Loan</option>
              <option>Car Loan</option>
            </select>
          </div>
          <button type="submit" class="btn btn-success">Add Loan</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
