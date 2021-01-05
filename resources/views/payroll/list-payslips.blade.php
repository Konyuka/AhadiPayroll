@extends('layouts.main')

@push('header_scripts')
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap4.min.css') }}"> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
@endpush

@section('content')
<div class="content container-fluid">

                <!-- Page Title -->
                <div class="row">
                    {{-- fugly fixing --}}
                    <input type="hidden" data-fetch-route="{{ route('payslips.datatables', $salary_date ) }}" id="payslipsFetch">
                    <div class="col-sm-6 col-6">
                    <h4 class="page-title">Employees Payslips for <strong>{{$salary_date}}</strong> </h4>
                    </div>
                    <div class="col-sm-6 col-6 text-right m-b-30">
                        <a href="{{ route('payroll.email', $salary_date )}}" class="btn add-btn" ><i class="fa fa-plus"></i> Send All Slips To Employees Email</a>
                    </div>
                </div>
                <!-- /Page Title -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-stripped datatable" id="payslips-table">
                                <thead>
                                    <tr>
                                        <th>Employee ID</th>
                                        <th>Employee Names</th>
                                        <th>Salary Arrears</th>
                                        <th>Daily Rewards</th>
                                        <th>Performance Bonus</th>
                                        <th>Overtime</th>
                                        <th>Team Leader</th>
                                        <th>Extra Tole</th>
                                        <th>Basic Salary</th>
                                        <th>Gross Pay</th>
                                        <th>P.A.Y.E</th>
                                        <th>N.H.I.F</th>
                                        <th>N.S.S.F</th>
                                        <th>Total Deductions</th>
                                        <th>Net Amount</th>


                                        <th>#</th>
                                     </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
@endsection

@push('footer_scripts')
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js "></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js "></script>
    <script>


         $(function() {

      var $data_route= $("#payslipsFetch").attr('data-fetch-route');
      console.log($data_route);
            $('#payslips-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: $data_route,
                columns: [

                    { data: 'employee.id', name: 'employee.id' },
                    { data: 'employee.names', name: 'employee.names' , orderable: false, searchable: true  },
                    { data: 'salary_arrears', name: 'salary_arrears',  orderable: false, searchable: false },
                    { data: 'daily_rewards', name: 'daily_rewards',  orderable: false, searchable: false },
                    { data: 'performance_bonus', name: 'performance_bonus',  orderable: false, searchable: false },
                    { data: 'overtime', name: 'overtime',  orderable: false, searchable: false },
                    { data: 'team_leader', name: 'team_leader',  orderable: false, searchable: false },
                    { data: 'extra_tole', name: 'extra_tole',  orderable: false, searchable: false },
                    { data: 'basic_salary', name: 'basic_salary',  orderable: false, searchable: false },
                    { data: 'gross_pay', name: 'gross_pay'  , orderable: false, searchable: false  },
                    { data: 'paye', name: 'paye' , orderable: false, searchable: false  },
                    { data: 'nhif', name: 'nhif',  orderable: false, searchable: false },
                    { data: 'nssf', name: 'nssf',  orderable: false, searchable: false },
                    { data: 'total_deductions', name: 'total_deductions',  orderable: false, searchable: false  },
                    { data: 'net_amount', name: 'net_amount', orderable: false, searchable: false  },
                    { data: 'action', name: 'action',  orderable: false, searchable: false },

                          ]
            });
         });
        </script>

@endpush
