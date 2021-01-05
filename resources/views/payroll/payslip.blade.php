@extends('layouts.main')

@section('content')
<!-- Page Content -->
<div class="content container-fluid">

	<!-- Page Title -->
	<div class="row ">
		<div class="col-4">
			<h4 class="page-title">Payslip</h4>
		</div>
		<div class="col-8  m-b-30">
			<div class="btn-group btn-group-sm">
				<button class="btn btn-white">PDF</button>
				<button href="" class="btn btn-white" id="print-payslip"><i class="fa fa-print fa-lg"></i>
					Print</button>
			</div>
		</div>
	</div>
	<!-- /Page Title -->

	<div class="row " id="payslip-item">
		<div class="col-md-8 offset-md-2">
			<div class="card">
				<div class="card-body">
					<h4 class="payslip-title">Payslip</h4>
					<div class="row">
						<div class="col-sm-6 m-b-20">
							<img src="{{ asset('assets/img/log.png') }} " class="inv-logo" alt="">
							<ul class="list-unstyled mb-0">
								<li class="text-uppercase"> <strong>Gain Ventures Limited</strong> </li>
								<li></li>
								<li></li>
							</ul>
						</div>
						<div class="col-sm-6 m-b-20">
							<div class="invoice-details">
								<h3 class="text-uppercase">Payslip # {{ $payslip->id}}</h3>
								<ul class="list-unstyled">
									<li>Salary Month: <span>{{ $payslip->salary_for}}</span></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 m-b-20">
							<ul class="list-unstyled">
								<li>
									<h5 class="mb-0 text-uppercase">{{ $payslip->employee->names}}</h5>
								</li>
								<li><span class="text-uppercase">{{ $payslip->employee->job_title}}</span></li>
								<li>Collector Number: {{ $payslip->employee->tag}}</li>
								<li class="text-uppercase">Bank Branch: {{ $payslip->employee->bank_branch}}</li>
								<li class="text-uppercase">Bank Account: {{ $payslip->employee->account}}</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							<div>
								<h4 class="m-b-10"><strong>Payments</strong></h4>
								<table class="table table-bordered">
									<tbody>
										<tr>
											<td><strong>Salary Arrears</strong> <span class="float-right">Ksh
													{{number_format($payslip->salary_arrears)}}</span></td>
										</tr>
										<tr>
											<td><strong>Daily Rewards</strong> <span class="float-right">Ksh
													{{number_format($payslip->daily_rewards)}}</span></td>
										</tr>
										<tr>
											<td><strong>Performance Bonus</strong> <span class="float-right">Ksh
													{{number_format($payslip->performance_bonus)}}</span></td>
										</tr>
										<tr>
											<td><strong>Overtime</strong> <span class="float-right">Ksh
													{{number_format($payslip->overtime)}}</span></td>
										</tr>
										<tr>
											<td><strong>Team Leader Reward</strong> <span class="float-right">Ksh
													{{number_format($payslip->team_leader)}}</span></td>
										</tr>
										<tr>
											<td><strong>Extra Tole Reward</strong> <span class="float-right">Ksh
													{{number_format($payslip->extra_tole)}}</span></td>
										</tr>
										<tr>
											<td><strong>End of Year Bonus</strong> <span class="float-right">Ksh
													{{number_format($payslip->year_bonus)}}</span></td>
										</tr>
										<tr>
											<td><strong>Basic Salary</strong> <span class="float-right">Ksh
													{{number_format($payslip->basic_salary)}}</span></td>
										</tr>
										<tr>
											<td><strong>Gross Salary Salary</strong> <span class="float-right">Ksh
													{{number_format($payslip->gross_pay)}}</span></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="col-6">
							<div>
								<h4 class="m-b-10"><strong>Deductions</strong></h4>
								<table class="table table-bordered">
									<tbody>
										<tr>
											<td><strong>Pay As You Earn (P.A.Y.E)</strong> <span class="float-right">Ksh
													{{number_format($payslip->paye)}}</span></td>
										</tr>
										<tr>
											<td><strong>NSSF</strong> <span class="float-right">Ksh
													{{number_format($payslip->nssf)}}</span></td>
										</tr>
										<tr>
											<td><strong>NHIF</strong> <span class="float-right">Ksh
													{{number_format($payslip->nhif)}}</span></td>
										</tr>
										<tr>
											<td><strong>Total Deductions</strong> <span class="float-right"><strong>Ksh
														{{number_format($payslip->total_deductions)}}</strong></span>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="col-sm-12">
							<p><strong>Net Salary: Ksh {{number_format($payslip->net_amount)}}</strong> </p>
						</div>
						<div class="col-sm-12 mb-2">
							<p class="text-muted">PAYMENT BY BANK TRANSFER</p>
						</div>
						<div class="col-sm-6">
							<div>
								<table class="table table-sm table-borderless">
									<tbody>
										<tr>
											<td>STATEMENT VALUES</td>
										</tr>
										<tr>
											<td>NSSF Paid by Employer</td>
											<td>Ksh {{number_format($payslip->nhif)}}</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
<!-- /Page Content -->
@endsection

@push('footer_scripts')

<script type="text/javascript" src="{{ asset('assets/js/printThis.js')}} "></script>
<script>
	$(function () {
		$('#print-payslip').on("click", function () {
			$('#payslip-item').printThis({
				base: ""
			});
		});
	});
</script>

@endpush
