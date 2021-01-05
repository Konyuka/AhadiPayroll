/*
Author       : Michael Saiba

*/

/*============================
 [Table of CSS]

1. General
2. Table
3. Helper Class
4. Bootstrap Classes
5. Animation
6. Toggle Button
7. Modal
8. Header
9. Sidebar
10. Content
11. Login
12. Dashboard
13. Activity
14. Select2
15. Nav tabs
16. Holidays
17. Delete Modal
18. Edit Profile
19. Chat
20. Focus Label
21. Leave
22. Employee
23. Events
24. Profile
25. Notifications
26. Roles & Permissions
27. Chat Right Sidebar
28. Projects
29. Invoice
30. Task
31. Project View
32. Payslip
33. Attendance
34. Ticket
35. Client Profile
36. Inbox
37. Mail View
38. Voice call
39. Video Call
40. Outgoing call
41. Incoming call
42. Contacts
43. Chat Sidebar
44. Jobs
45. Job Details
46. Notification Settings
47. Leave Settings
48. Termination
49. Loader
50. Payroll Items
51. Error
52. Lock Screen
53. OTP
54. Salary Settings
55. Components
56. Search
57. Knowledgebase
58. FAQ
59. Employee Dashboard
60. Performance Review
61. Responsive

========================================*/



/*-----------------
	1. General
-----------------------*/

html {
	height: 100%;
}
body {
	font-family: , sans-serif;
	font-size: .9375rem;
	color: #1f1f1f;
	background-color: #f7f7f7;
	min-height: 100%;
	overflow-x: hidden;
}
h1,
h2,
h3,
h4,
h5,
h6 {
	font-family: sans-serif;
	margin-top: 0;
	font-weight: 500;
}
h1, .h1 {
	font-size: 2.25rem;
}
h2, .h2 {
	font-size: 1.875rem;
}
h3, .h3 {
	font-size: 1.5rem;
}
h4, .h4 {
	font-size: 1.125rem;
}
h5, .h5 {
	font-size: 0.875rem;
}
h6, .h6 {
	font-size: 0.75rem;
}
a:hover,
a:active,
a:focus {
	text-decoration: none;
	outline: none;
}
.form-control {
	border-color: #e3e3e3;
    box-shadow: none;
    font-size: 15px;
    height: 44px;
}
.form-control:focus {
	border-color: #ccc;
	box-shadow: none;
	outline: 0 none;
}
.form-control[disabled], fieldset[disabled] .form-control {
    cursor: not-allowed;
}
input,
button,
a {
	transition: all 0.4s ease;
	-moz-transition: all 0.4s ease;
	-o-transition: all 0.4s ease;
	-ms-transition: all 0.4s ease;
	-webkit-transition: all 0.4s ease;
}
input, input:focus,
button, button:focus {
	outline: none;
}
input[type="file"] {
	height: auto;
}
input[type=text],
input[type=password] {
	-webkit-appearance: none;
	-moz-appearance: none;
	appearance: none;
}
textarea.form-control {
	resize: vertical;
}
.navbar-nav > li {
	float: left;
}
.form-control-lg.form-control {
	border-radius: 4px;
	height: 46px;
}
.form-control-sm.form-control {
	height: 30px;
	border-radius: 0;
}
.input-group.input-group-lg .form-control {
	height: 46px;
}
.material-icons {
	font-family: 'Material Icons';
	font-weight: normal;
	font-style: normal;
	font-size: 24px;
	display: inline-block;
	line-height: 1;
	text-transform: none;
	letter-spacing: normal;
	word-wrap: normal;
	white-space: nowrap;
	direction: ltr;
	-webkit-font-smoothing: antialiased;
	text-rendering: optimizeLegibility;
	-moz-osx-font-smoothing: grayscale;
	font-feature-settings: 'liga';
}
.input-group-text {
	background-color: #f7f7f7;
	border-color: #e3e3e3;
}
select.form-control[multiple] option, select.form-control[size] option {
    border-radius: 3px;
    padding: 7px 12px;
}
select.form-control[multiple], select.form-control[size] {
    height: 200px;
    padding: 7px;
}

/*-----------------
	2. Table
-----------------------*/

.table {
	color: #333;
}
.table.table-white {
	background-color: #fff;
}
.table thead th {
	font-weight: 500;
    letter-spacing: 0.05em;
}
.table-striped > tbody > tr:nth-of-type(2n+1) {
	background-color: #f6f6f6;
}
table.table td .avatar {
	margin: 0 5px 0 0;
}
table.table td h2 {
	display: inline-block;
	font-size: inherit;
	font-weight: 400;
	margin: 0;
	padding: 0;
	vertical-align: middle;
}
table.table td h2.table-avatar {
    align-items: center;
    display: inline-flex;
    font-size: inherit;
    font-weight: 400;
    margin: 0;
    padding: 0;
    vertical-align: middle;
	white-space: nowrap;
}
table.table td h2.table-avatar.blue-link a {
	color: #007bff;
}
table.table td h2 a {
	color: #333;
}
table.table td h2 a:hover {
	color: #00c5fb;
}
table.table td h2 span {
	color: #888;
	display: block;
	font-size: 12px;
	margin-top: 3px;
}
table.dataTable {
	margin-bottom: 15px !important;
	margin-top: 15px !important;
}
.table-nowrap td,
.table-nowrap th {
	white-space: nowrap
}
.table-hover tbody tr:hover {
    background-color: #f7f7f7;
    color: #212529;
}
table.dataTable thead > tr > th.sorting_asc,
table.dataTable thead > tr > th.sorting_desc,
table.dataTable thead > tr > th.sorting,
table.dataTable thead > tr > td.sorting_asc,
table.dataTable thead > tr > td.sorting_desc,
table.dataTable thead > tr > td.sorting {
	padding-right: 30px !important;
}

/*-----------------
	3. Helper Class
-----------------------*/

.p-20 {
	padding: 20px !important;
}
.p-t-0 {
	padding-top: 0 !important;
}
.m-0 {
	margin: 0 !important;
}
.m-r-5 {
	margin-right: 5px !important;
}
.m-r-10 {
	margin-right: 10px !important;
}
.m-l-5 {
	margin-left: 5px !important;
}
.m-l-15 {
	margin-left: 15px !important;
}
.m-t-5 {
	margin-top: 5px !important;
}
.m-t-0 {
	margin-top: 0 !important;
}
.m-t-10 {
	margin-top: 10px !important;
}
.m-t-15 {
	margin-top: 15px !important;
}
.m-t-20 {
	margin-top: 20px !important;
}
.m-t-30 {
	margin-top: 30px !important;
}
.m-t-50 {
	margin-top: 50px !important;
}
.m-b-5 {
	margin-bottom: 5px !important;
}
.m-b-10 {
	margin-bottom: 10px !important;
}
.m-b-15 {
	margin-bottom: 15px !important;
}
.m-b-20 {
	margin-bottom: 20px !important;
}
.m-b-30 {
	margin-bottom: 30px !important;
}
.w-40 {
	width: 40px;
}
.btn-md {
	height: 40px;
}
.block {
	display: block !important;
}
.text-ellipsis {
	display: block;
	max-width: 100%;
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: nowrap;
}
.text-muted-light {
	color: #aaa;
}
.badge-success-border {
	border: 1px solid #55ce63;
	color: #55ce63;
	background-color: #fff;
	display: inline-block;
	min-width: 80px;
}
.badge-danger-border {
	border: 1px solid #f62d51;
	color: #f62d51;
	background-color: #fff;
	display: inline-block;
	min-width: 80px;
}
.badge-warning-border {
	border: 1px solid #ffbc34;
	color: #ffbc34;
	background-color: #fff;
	display: inline-block;
	min-width: 80px;
}
.badge-info-border {
	border: 1px solid #009efb;
	color: #009efb;
	background-color: #fff;
	display: inline-block;
	min-width: 80px;
}
.font-18 {
	font-size: 18px;
}
.btn.btn-rounded {
    border-radius: 50px;
}

/*-----------------
	4. Bootstrap Classes
-----------------------*/

.btn {
    border-radius: 5px;
}
.btn.disabled, .btn:disabled {
    cursor: not-allowed;
}
.btn-white {
	background-color: #fff;
	border: 1px solid #ccc;
	color: #333;
}
.btn-white:focus, .btn-white:hover {
    background-color: #f7f7f7;
}
.rounded,
.circle {
	border-radius: 500px;
}
.bg-purple,
.badge-purple {
	background-color: #7460ee !important;
}
.bg-primary,
.badge-primary {
	background-color: #00c5fb !important;
}
.bg-success,
.badge-success {
	background-color: #55ce63 !important;
}
.bg-info,
.badge-info {
	background-color: #009efb !important;
}
.bg-warning,
.badge-warning {
	background-color: #ffbc34 !important;
}
.bg-danger,
.badge-danger {
	background-color: #f62d51 !important;
}
.bg-white {
	background-color: #fff;
}
.bg-warning-light {
    background-color: rgba(255, 152, 0, 0.12) !important;
    color: #f39c12 !important;
}
.text-primary,
.dropdown-menu > li > a.text-primary {
	color: #00c5fb !important;
}
.text-success,
.dropdown-menu > li > a.text-success {
	color: #55ce63 !important;
}
.text-danger,
.dropdown-menu > li > a.text-danger {
	color: #f62d51 !important;
}
.text-info,
.dropdown-menu > li > a.text-info {
	color: #009efb !important;
}
.text-warning,
.dropdown-menu > li > a.text-warning {
	color: #ffbc34 !important;
}
.text-purple,
.dropdown-menu > li > a.text-purple {
	color: #7460ee !important;
}
.text-muted {
    color: #8e8e8e !important;
}
.btn-purple {
	background-color: #7460ee;
	border: 1px solid #7460ee;
	color: #fff;
}
.btn-purple:hover,
.btn-purple:focus {
	background-color: #482fe9;
	border: 1px solid #482fe9;
}
.btn-primary {
	background-color: #00c5fb;
	border: 1px solid #00c5fb;
}
.btn-primary:hover,
.btn-primary:focus,
.btn-primary.active,
.btn-primary:active,
.open > .dropdown-toggle.btn-primary {
	background-color: #00b7ed;
	border: 1px solid #00b7ed;
}
.btn-primary.active.focus,
.btn-primary.active:focus,
.btn-primary.active:hover,
.btn-primary.focus:active,
.btn-primary:active:focus,
.btn-primary:active:hover,
.open > .dropdown-toggle.btn-primary.focus,
.open > .dropdown-toggle.btn-primary:focus,
.open > .dropdown-toggle.btn-primary:hover {
	background-color: #00b7ed;
	border: 1px solid #00b7ed;
}
.btn-primary.active:not(:disabled):not(.disabled),
.btn-primary:active:not(:disabled):not(.disabled),
.show > .btn-primary.dropdown-toggle {
	background-color: #00b7ed;
	border-color: #00b7ed;
	color: #fff;
}
.btn-primary.active:focus:not(:disabled):not(.disabled),
.btn-primary:active:focus:not(:disabled):not(.disabled),
.show > .btn-primary.dropdown-toggle:focus {
	box-shadow: unset;
}
.btn-primary.disabled, .btn-primary:disabled {
    background-color: #00c5fb;
    border-color: #00c5fb;
    color: #fff;
}
.btn-success {
	background-color: #55ce63;
	border: 1px solid #55ce63
}
.btn-success:hover,
.btn-success:focus,
.btn-success.active,
.btn-success:active,
.open > .dropdown-toggle.btn-success {
	background: #4ab657;
	border: 1px solid #4ab657;
	color: #fff;
}
.btn-success.active.focus,
.btn-success.active:focus,
.btn-success.active:hover,
.btn-success.focus:active,
.btn-success:active:focus,
.btn-success:active:hover,
.open > .dropdown-toggle.btn-success.focus,
.open > .dropdown-toggle.btn-success:focus,
.open > .dropdown-toggle.btn-success:hover {
	background: #4ab657;
	border: 1px solid #4ab657
}
.btn-success.active:focus:not(:disabled):not(.disabled),
.btn-success:active:focus:not(:disabled):not(.disabled),
.show > .btn-success.dropdown-toggle:focus {
	box-shadow: unset;
}
.btn-success.disabled, .btn-success:disabled {
    background-color: #55ce63;
    border-color: #55ce63;
    color: #fff;
}
.btn-info {
	background-color: #009efb;
	border: 1px solid #009efb
}
.btn-info:hover,
.btn-info:focus,
.btn-info.active,
.btn-info:active,
.open > .dropdown-toggle.btn-info {
	background-color: #028ee1;
	border: 1px solid #028ee1
}
.btn-info.active.focus,
.btn-info.active:focus,
.btn-info.active:hover,
.btn-info.focus:active,
.btn-info:active:focus,
.btn-info:active:hover,
.open > .dropdown-toggle.btn-info.focus,
.open > .dropdown-toggle.btn-info:focus,
.open > .dropdown-toggle.btn-info:hover {
	background-color: #028ee1;
	border: 1px solid #028ee1
}
.btn-info.active:focus:not(:disabled):not(.disabled),
.btn-info:active:focus:not(:disabled):not(.disabled),
.show > .btn-info.dropdown-toggle:focus {
	box-shadow: unset;
}
.btn-info.disabled, .btn-info:disabled {
    background-color: #009efb;
    border-color: #009efb;
    color: #fff;
}
.btn-warning {
	background: #ffbc34;
	border: 1px solid #ffbc34
}
.btn-warning:hover,
.btn-warning:focus,
.btn-warning.active,
.btn-warning:active,
.open > .dropdown-toggle.btn-warning {
	background: #e9ab2e;
	border: 1px solid #e9ab2e
}
.btn-warning.active.focus,
.btn-warning.active:focus,
.btn-warning.active:hover,
.btn-warning.focus:active,
.btn-warning:active:focus,
.btn-warning:active:hover,
.open > .dropdown-toggle.btn-warning.focus,
.open > .dropdown-toggle.btn-warning:focus,
.open > .dropdown-toggle.btn-warning:hover {
	background: #e9ab2e;
	border: 1px solid #e9ab2e
}
.btn-warning.active:focus:not(:disabled):not(.disabled),
.btn-warning:active:focus:not(:disabled):not(.disabled),
.show > .btn-warning.dropdown-toggle:focus {
	box-shadow: unset;
}
.btn-warning.disabled, .btn-warning:disabled {
    background-color: #ffbc34;
    border-color: #ffbc34;
    color: #fff;
}
.btn-danger {
	background: #f62d51;
	border: 1px solid #f62d51
}
.btn-danger:hover,
.btn-danger:focus,
.btn-danger.active,
.btn-danger:active,
.open > .dropdown-toggle.btn-danger {
	background-color: #e6294b;
	border: 1px solid #e6294b
}
.btn-danger.active.focus,
.btn-danger.active:focus,
.btn-danger.active:hover,
.btn-danger.focus:active,
.btn-danger:active:focus,
.btn-danger:active:hover,
.open > .dropdown-toggle.btn-danger.focus,
.open > .dropdown-toggle.btn-danger:focus,
.open > .dropdown-toggle.btn-danger:hover {
	background: #e9ab2e;
	border: 1px solid #e9ab2e
}
.btn-danger.active:focus:not(:disabled):not(.disabled),
.btn-danger:active:focus:not(:disabled):not(.disabled),
.show > .btn-danger.dropdown-toggle:focus {
	box-shadow: unset;
}
.btn-danger.disabled, .btn-danger:disabled {
    background-color: #f62d51;
    border-color: #f62d51;
    color: #fff;
}
.btn-custom {
	background: #00c5fb;
	background: -moz-linear-gradient(left, #00c5fb 0%, #0253cc 100%);
	background: -webkit-linear-gradient(left, #00c5fb 0%, #0253cc 100%);
	background: -ms-linear-gradient(left, #00c5fb 0%, #0253cc 100%);
	background: linear-gradient(to right, #00c5fb 0%, #0253cc 100%);
	color: #fff;
}
.btn-custom.focus,
.btn-custom:focus,
.btn-custom:hover {
	background: #00c5fb;
	background: -moz-linear-gradient(left, #00c5fb 0%, #0253cc 100%);
	background: -webkit-linear-gradient(left, #00c5fb 0%, #0253cc 100%);
	background: -ms-linear-gradient(left, #00c5fb 0%, #0253cc 100%);
	background: linear-gradient(to right, #00c5fb 0%, #0253cc 100%);
	color: #fff;
}
.pagination > .active > a,
.pagination > .active > a:focus,
.pagination > .active > a:hover,
.pagination > .active > span,
.pagination > .active > span:focus,
.pagination > .active > span:hover {
	background-color: #00c5fb;
	border-color: #00c5fb;
}
.pagination > li > a,
.pagination > li > span {
	color: #00c5fb;
}
.page-link:hover {
	color: #00c5fb;
}
.page-link:focus {
	box-shadow: unset;
}
.page-item.active .page-link {
	background-color: #00c5fb;
	border-color: #00c5fb;
}
.dropdown-menu {
	border: 1px solid rgba(0, 0, 0, 0.1);
	border-radius: 3px;
	transform-origin: left top 0;
	box-shadow: inherit;
	background-color: #fff;
}
.navbar-nav .open .dropdown-menu {
	background-color: #fff;
	border: 1px solid rgba(0, 0, 0, 0.1);
}
.btn-group-xs > .btn,
.btn-xs {
	min-height: 22px;
	min-width: 22px;
}
.dropdown-menu {
	font-size: 13px;
}
.btn-link,
.btn-link:hover,
.btn-link:focus,
.btn-link:active {
	box-shadow: none;
}
.btn-link {
	color: #333;
}
.nav .open > a,
.nav .open > a:focus,
.nav .open > a:hover {
	background-color: rgba(0, 0, 0, 0.2);
}
.form-text {
	color: #999;
	font-size: 12px;
	margin-bottom: 7px;
	margin-top: 7px;
}
.btn.focus, .btn:focus {
	box-shadow: unset;
}
.dropdown-item.active, .dropdown-item:active {
	background-color: #00c5fb;
}
.list-group-item {
	border: 1px solid #e3e3e3;
}
.custom-file {
	height: 44px;
}
.custom-file .custom-file-label {
	border: 1px solid #e3e3e3;
    height: 44px;
    margin-bottom: 0;
	padding: 10px 15px;
}
.custom-file-label::after {
    background-color: #f2f2f2;
    height: 42px;
    padding: 10px 15px;
}
.custom-file input[type="file"] {
	height: 44px;
}
.bg-inverse-primary {
	background: rgba(77, 138, 240, .2);
	color: #4d8af0;
}
.bg-inverse-secondary {
	background: rgba(194, 198, 209, .2);
	color: #c2c6d1
}
.bg-inverse-success {
	background: rgba(0, 224, 147, .2);
	color: #00e093
}
.bg-inverse-info {
	background: rgba(108, 97, 246, .2);
	color: #6c61f6
}
.bg-inverse-warning {
	background: rgba(240, 130, 95, .2);
	color: #f0825f
}
.bg-inverse-danger {
	background: rgba(255, 95, 102, .2);
	color: #ff5f66
}
.bg-inverse-light {
	background: rgba(223, 223, 223, .2);
	color: #dfdfdf
}
.bg-inverse-dark {
	background: rgba(116, 118, 123, .2);
	color: #74767b
}
.bg-inverse-white {
	background: rgba(255, 255, 255, .2);
	color: #fff
}

/*-----------------
	9. Sidebar
-----------------------*/

.sidebar {
    background-color: #34444c;
    border-right: 1px solid transparent;
    bottom: 0;
    left: 0;
    margin-top: 0;
    position: fixed;
    top: 60px;
    transition: all 0.2s ease-in-out 0s;
    width: 230px;
    z-index: 1001;
}
.sidebar.opened {
	-webkit-transition: all 0.4s ease;
	-moz-transition: all 0.4s ease;
	transition: all 0.4s ease;
}
.sidebar-inner {
	height: 100%;
	transition: all 0.2s ease-in-out 0s;
}
.sidebar-menu ul {
	font-size: 15px;
	list-style-type: none;
	margin: 0;
	padding: 0;
	position: relative;
}
.sidebar-menu li a {
	color: #b7c0cd;
	display: block;
	font-size: 15px;
	height: auto;
	padding: 0 20px;
}
.sidebar-menu li a:hover {
	color: #fff;
}
.sidebar-menu li.active a {
	color: #fff;
	background-color: rgba(0, 0, 0, 0.2);
}
.menu-title {
	color: #00c5fb;
	display: flex;
	font-size: 16px;
	padding: 12px 15px;
	opacity: 1;
	white-space: nowrap;
}
.menu-title > i {
	float: right;
	line-height: 40px;
}
.sidebar-menu li.menu-title a {
    color: #00c5fb;
    display: inline-block;
    margin-left: auto;
    padding: 0;
}
.sidebar-menu li.menu-title a.btn {
    color: #fff;
    display: block;
    float: none;
    font-size: 15px;
    margin-bottom: 15px;
    padding: 10px 15px;
}
.sidebar-menu ul ul a.active {
	color: #00c5fb;
	text-decoration: underline;
}
.mobile-user-menu {
    color: #fff;
    display: none;
    float: right;
    font-size: 24px;
    height: 60px;
    line-height: 60px;
    padding: 0 20px;
    position: absolute;
    right: 0;
    text-align: right;
    top: 0;
    width: 60px;
    z-index: 10;
}
.mobile-user-menu > a {
    color: #fff;
    padding: 0;
}
.mobile-user-menu a:hover {
	color: #fff;
}
.mobile-user-menu > .dropdown-menu {
	min-width: 130px;
}
.mobile-user-menu > .dropdown-menu > a {
    line-height: 23px;
}
.profile-rightbar {
	display: none !important;
	color: #bbb;
	font-size: 26px;
	margin-left: 15px;
}
.mobile_btn {
	display: none;
	float: left;
}
.sidebar .sidebar-menu > ul > li > a span {
	transition: all 0.2s ease-in-out 0s;
	display: inline-block;
	margin-left: 15px;
	white-space: nowrap;
}
.sidebar .sidebar-menu > ul > li > a span.chat-user {
    margin-left: 0;
    overflow: hidden;
    text-overflow: ellipsis;
}
.sidebar .sidebar-menu > ul > li > a span.badge {
	margin-left: auto;
}
.sidebar-menu ul ul a {
	display: block;
	font-size: 14px;
	padding: 9px 10px 9px 50px;
	position: relative;
}
.sidebar-menu ul ul {
	background-color: #263238;
	display: none;
}
.sidebar-menu ul ul ul a {
	padding-left: 70px;
}
.sidebar-menu ul ul ul ul a {
	padding-left: 90px;
}
.sidebar-menu > ul > li {
	position: relative;
}
.sidebar-menu .menu-arrow {
	-webkit-transition: -webkit-transform 0.15s;
	-o-transition: -o-transform 0.15s;
	transition: transform .15s;
	position: absolute;
	right: 15px;
	display: inline-block;
	font-family: 'FontAwesome';
	text-rendering: auto;
	line-height: 40px;
	font-size: 18px;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	-webkit-transform: translate(0, 0);
	-ms-transform: translate(0, 0);
	-o-transform: translate(0, 0);
	transform: translate(0, 0);
	line-height: 18px;
	top: 15px;
}
.sidebar-menu .menu-arrow:before {
	content: "\f105";
}
.sidebar-menu li a.subdrop .menu-arrow {
	-ms-transform: rotate(90deg);
	-webkit-transform: rotate(90deg);
	-o-transform: rotate(90deg);
	transform: rotate(90deg);
}
.noti-dot:before {
	content: '';
	width: 5px;
	height: 5px;
	border: 5px solid #00c5fb;
	-webkit-border-radius: 30px;
	-moz-border-radius: 30px;
	border-radius: 30px;
	background-color: #00c5fb;
	z-index: 10;
	position: absolute;
	right: 37px;
	top: 19px;
}
.noti-dot:after {
	content: '';
	border: 4px solid #00c5fb;
	background: transparent;
	-webkit-border-radius: 60px;
	-moz-border-radius: 60px;
	border-radius: 60px;
	height: 24px;
	width: 24px;
	-webkit-animation: pulse 3s ease-out;
	-moz-animation: pulse 3s ease-out;
	animation: pulse 3s ease-out;
	-webkit-animation-iteration-count: infinite;
	-moz-animation-iteration-count: infinite;
	animation-iteration-count: infinite;
	position: absolute;
	top: 12px;
	right: 30px;
	z-index: 1;
	opacity: 0;
}
.sidebar-menu ul ul a .menu-arrow {
	top: 6px;
}
.sidebar-menu a {
	line-height: 1.3;
	transition: unset;
	-moz-transition: unset;
	-o-transition: unset;
	-ms-transition: unset;
	-webkit-transition: unset;
}
.sidebar-menu > ul > li > a {
	padding: 12px 15px;
	align-items: center;
	display: flex;
	justify-content: flex-start;
	position: relative;
	transition: all 0.2s ease-in-out 0s;
}
.sidebar-menu ul li a i {
	display: inline-block;
	font-size: 24px;
	line-height: 24px;
	text-align: left;
	vertical-align: middle;
	width: 20px;
	transition: all 0.2s ease-in-out 0s;
}
.sidebar-menu ul li.menu-title a i {
	font-size: 16px !important;
	margin-right: 0;
	text-align: right;
	width: auto;
}
.sidebar-menu li a > .badge {
    color: #fff;
}

/*-----------------
	10. Content
-----------------------*/

.page-wrapper {
	left: 0;
	margin-left: 230px;
	padding-top: 60px;
	position: relative;
	transition: all 0.2s ease-in-out;
}
.page-wrapper > .content {
	padding: 30px;
}
.card {
	border: 1px solid #ededed;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.2);
	margin-bottom: 30px;
}
.card-box {
	background-color: #fff;
	border: 1px solid #ededed;
	border-radius: 4px;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.2);
	margin-bottom: 30px;
	padding: 20px;
	position: relative;
}
.card-title {
    color: #1f1f1f;
    font-size: 20px;
    font-weight: 500;
    margin-bottom: 20px;
}
.page-title {
    color: #1f1f1f;
    font-size: 26px;
    font-weight: 500;
    margin-bottom: 20px;
}
.page-sub-title {
	color: #565656;
	font-size: 18px;
	font-weight: normal;
	margin-bottom: 20px;
}
.add-btn {
    background-color: #00c5fb;
    border: 1px solid #00c5fb;
    border-radius: 50px;
    color: #fff;
    float: right;
    font-weight: 500;
    min-width: 140px;
}
.add-btn:hover,
.add-btn:focus,
.add-btn:active {
	background-color: #00b7ed;
	border: 1px solid #00b7ed;
    color: #fff;
}
.add-btn i {
	margin-right: 5px;
}
.cal-icon {
	position: relative;
	width: 100%;
}
.cal-icon:after {
	color: #979797;
	content: "\f073";
	display: block;
	font-family: "FontAwesome";
    font-size: 15px;
    margin: auto;
    position: absolute;
    right: 15px;
    top: 10px;
}
.form-focus .cal-icon:after {
	top: 15px;
}

/*-----------------
	11. Login
-----------------------*/

.account-page {
	align-items: center ;
	display: flex;
}
.account-page .main-wrapper {
	display: flex;
    flex-wrap: wrap;
    justify-content: center;
    width: 100%;
}
.account-content {
	padding: 20px 0;
}
.account-title {
    font-size: 26px;
    font-weight: 500;
    margin-bottom: 5px;
    text-align: center;
}
.account-subtitle {
    color: #4c4c4c;
    font-size: 18px;
    margin-bottom: 30px;
    text-align: center;
}
.account-box {
	background-color: #fff;
    border: 1px solid #ededed;
    border-radius: 4px;
    box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.2);
    margin: 0 auto;
    overflow: hidden;
    width: 480px;
}

.email-box {
	background-color: #fff;
    border: 1px solid #ededed;
    border-radius: 4px;
    box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.2);
    margin: 0 auto;
    overflow: hidden;
}

.account-wrapper {
	padding: 30px;
}
.account-logo {
	margin-bottom: 30px;
	text-align: center;
}
.account-box .form-group {
	margin-bottom: 25px;
}
.account-box .account-btn {
	background: #00c5fb;
	background: -moz-linear-gradient(left, #00c5fb 0%, #0253cc 100%);
	background: -webkit-linear-gradient(left, #00c5fb 0%, #0253cc 100%);
	background: -ms-linear-gradient(left, #00c5fb 0%, #0253cc 100%);
	background: linear-gradient(to right, #00c5fb 0%, #0253cc 100%);
	border: 0;
    border-radius: 4px;
    display: block;
    font-size: 22px;
    padding: 10px 26px;
    width: 100%;
}
.account-box .account-btn:hover,
.account-box .account-btn:focus {
	border: 0;
	opacity: 0.8;
}
.account-box .form-control {
    background-color: #fbfbfb;
    border: 1px solid #e3e3e3;
    border-radius: 4px;
    height: 46px;
}
.account-box label {
	color: #1f1f1f;
	font-size: 16px;
	font-weight: normal;
    margin-bottom: 5px;
}
.account-logo img {
	width: 100px;
}
.account-footer {
    text-align: center;
}
.account-footer p {
    margin-bottom: 0;
}
.account-footer a {
	color: #00c5fb;
}
.account-footer a:hover {
	color: #00c5fb;
}

/*-----------------
	12. Dashboard
-----------------------*/

.card-table .card-header {
	background-color: #fff;
	border-bottom: 1px solid #ddd;
	padding: 15px;
}
.card-table .card-body {
	padding: 0;
}
.card-table .card-footer {
	background-color: #fff;
	text-align: center;
}
.card-table .card-footer a {
	color: #333;
}
.card-title > a.btn {
	color: #fff;
}
.custom-table tr {
	background-color: #fff;
	box-shadow: 0 0 3px #e5e5e5;
}
.table.custom-table > tbody > tr > td,
.table.custom-table > tbody > tr > th,
.table.custom-table > tfoot > tr > td,
.table.custom-table > tfoot > tr > th,
.table.custom-table > thead > tr > td,
.table.custom-table > thead > tr > th {
	padding: 10px 8px;
	vertical-align: middle;
}
.table.custom-table > tbody > tr > td:first-child,
.table.custom-table > thead > tr > th:first-child {
	padding-left: 15px;
}
.table.custom-table > tbody > tr > td:last-child,
.table.custom-table > thead > tr > th:last-child {
	padding-right: 15px;
}
.dash-widget-icon {
	background-color: rgba(0, 197, 251, 0.2);
	border-radius: 100%;
	color: #00c5fb;
	display: inline-block;
	float: left;
	font-size: 30px;
	height: 60px;
	line-height: 60px;
	margin-right: 10px;
	text-align: center;
	width: 60px;
}
.dash-widget-info {
	text-align: right;
}
.dash-widget-info > h3 {
	font-size: 30px;
	font-weight: 600;
}
.dash-widget-info > span {
	font-size: 16px;
}

/*-----------------
	13. Activity
-----------------------*/

.activity-box {
	position: relative;
}
.activity-list {
	list-style: none;
	margin: 0 0 0 10px;
	padding: 0;
	position: relative;
}
.activity .activity-list {
	list-style: none;
	margin: 0;
	padding: 0;
	position: relative;
}
.activity .activity-list > li .activity-user {
	height: 32px;
	margin: 0;
	padding: 0;
	position: absolute;
	top: 12px;
	left: 8px;
	width: 32px;
}
.activity .activity-list > li .activity-content {
	background-color: #fff;
	margin: 0 0 0 40px;
	padding: 0;
	position: relative;
}
.activity-list::before {
	background: #ddd;
	bottom: 0;
	content: "";
	left: 23px;
	position: absolute;
	top: 8px;
	width: 2px;
}
.activity .activity-list li::before {
	background: #ddd;
	bottom: 0;
	content: "";
	left: 22px;
	position: absolute;
	top: 12px;
	width: 2px;
}
.activity-list li::before {
	background: #eee;
	bottom: 0;
	content: "";
	left: 8px;
	position: absolute;
	top: 8px;
	width: 2px;
}
.activity-list > li {
	background-color: #fff;
	margin-bottom: 10px;
	padding: 10px;
	position: relative;
	border: 1px solid #ededed;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.2);
}
.activity-list > li:last-child .activity-content {
	margin-bottom: 0;
}
.activity-user .avatar {
	height: 32px;
	line-height: 32px;
	margin: 0;
	width: 32px;
}
.activity-list > li .activity-user {
	background: #fff;
	height: 32px;
	left: -7px;
	margin: 0;
	padding: 0;
	position: absolute;
	top: 3px;
	width: 32px;
}
.activity-list > li .activity-content {
	background-color: #fff;
	margin: 0 0 20px 40px;
	padding: 0;
	position: relative;
}
.activity-list > li .activity-content .timeline-content {
	color: #9e9e9e;
}
.activity-list > li .activity-content .timeline-content a {
    color: #616161;
}
.activity-list > li .time {
	color: #bdbdbd;
	display: block;
	font-size: 13px;
}

/*-----------------
	14. Select2
-----------------------*/

.select2-container .select2-selection--single {
    border: 1px solid #e3e3e3;
    border-radius: 0.25rem;
    height: 44px;
}
.select2-container--default .select2-selection--single .select2-selection__arrow {
	height: 42px;
	right: 7px;
}
.select2-container--default .select2-selection--single .select2-selection__arrow b {
	border-color: #ccc transparent transparent;
	border-style: solid;
	border-width: 6px 6px 0;
	height: 0;
	left: 50%;
	margin-left: -10px;
	margin-top: -2px;
	position: absolute;
	top: 50%;
	width: 0;
}
.select2-container--default.select2-container--open .select2-selection--single .select2-selection__arrow b {
	border-color: transparent transparent #ccc;
	border-width: 0 6px 6px;
}
.select2-container .select2-selection--single .select2-selection__rendered {
	padding-right: 30px;
	padding-left: 15px;
}
.select2-container--default .select2-selection--single .select2-selection__rendered {
	color: #676767;
	font-size: 15px;
	font-weight: normal;
	line-height: 42px;
}
.select2-container--default .select2-results__option--highlighted[aria-selected] {
	background-color: #00c5fb;
}

/*-----------------
	15. Nav Tabs
-----------------------*/

.nav-tabs .nav-link {
	border-radius: 0;
}
.nav-tabs > li > a {
	margin-right: 0;
	color: #888;
	border-radius: 0;
}
.nav-tabs .nav-link:focus, .nav-tabs .nav-link:hover {
    background-color: #eee;
    border-color: transparent;
	color: #333;
}
.nav-tabs.nav-justified > li > a {
	border-radius: 0;
	margin-bottom: 0;
}
.nav-tabs.nav-justified > li > a:hover,
.nav-tabs.nav-justified > li > a:focus {
	border-bottom-color: #ddd;
}
.nav-tabs.nav-justified.nav-tabs-solid > li > a {
	border-color: transparent;
}
.nav-tabs.nav-tabs-solid > li > a {
	color: #333;
}
.nav-tabs.nav-tabs-solid > li > a.active,
.nav-tabs.nav-tabs-solid > li > a.active:hover,
.nav-tabs.nav-tabs-solid > li > a.active:focus {
	background-color: #00c5fb;
	border-color: #00c5fb;
	color: #fff;
}

.nav-tabs.nav-tabs-solid.nav-tabs-rounded {
	border-radius: 50px;
}

.nav-tabs.nav-tabs-solid.nav-tabs-rounded > li > a {
	border-radius: 50px;
}

.nav-tabs.nav-tabs-solid.nav-tabs-rounded > li > a.active,
.nav-tabs.nav-tabs-solid.nav-tabs-rounded > li > a.active:hover,
.nav-tabs.nav-tabs-solid.nav-tabs-rounded > li > a.active:focus {
	border-radius: 50px;
}
.nav-tabs-justified > li > a {
	border-radius: 0;
	margin-bottom: 0;
}
.nav-tabs-justified > li > a:hover,
.nav-tabs-justified > li > a:focus {
	border-bottom-color: #ddd;
}
.nav-tabs-justified.nav-tabs-solid > li > a {
	border-color: transparent;
}
.tab-content {
	padding-top: 20px;
}

/*-----------------
	16. Holidays
-----------------------*/

.custom-table tr.holiday-completed {
	color: #aaa;
}
.dropdown.action-label {
	display: inline-block;
}
.action-label > a {
	display: inline-block;
	min-width: 103px;
}
.action-label .btn-sm {
	padding: 4px;
}

/*-----------------
	17. Delete Modal
-----------------------*/

.form-header {
    text-align: center;
	margin-bottom: 30px;
}
.form-header h3 {
    color: #333;
    font-size: 22px;
    font-weight: 500;
    margin-bottom: 10px;
}
.form-header p {
    color: #929292;
    font-size: 15px;
    margin-bottom: 0;
}
.modal-btn > .row {
	margin-left: -8px;
	margin-right: -8px;
}
.modal-btn > .row > div {
	padding-left: 8px;
	padding-right: 8px;
}
.continue-btn {
    background-color: #fff;
    border: 1px solid #00c5fb;
    border-radius: 50px;
    color: #00c5fb;
    display: block;
    font-size: 18px;
    font-weight: 600;
    padding: 10px 20px;
    text-align: center;
}
.continue-btn:hover,
.continue-btn:focus,
.continue-btn:active {
	background-color: #00c5fb;
	border: 1px solid #00c5fb;
	color: #fff;
}
.cancel-btn {
    background-color: #fff;
    border: 1px solid #00c5fb;
    border-radius: 50px;
    color: #00c5fb;
    display: block;
    font-size: 18px;
    font-weight: 600;
    padding: 10px 20px;
    text-align: center;
}
.cancel-btn:hover,
.cancel-btn:focus,
.cancel-btn:active {
	background-color: #00c5fb;
	border: 1px solid #00c5fb;
	color: #fff;
}

/*-----------------
	18. Edit Profile
-----------------------*/

.profile-img-wrap {
	height: 120px;
	position: absolute;
	width: 120px;
	background: #fff;
	overflow: hidden;
}
.profile-basic {
	margin-left: 140px;
}
.profile-basic .cal-icon {
	width: 100%;
}
.profile-img-wrap img {
    border-radius: 50%;
    height: 120px;
    width: 120px;
}
.fileupload.btn {
	position: absolute;
	right: 0;
	bottom: 0;
	background: rgba(33, 33, 33, 0.5);
	border-radius: 0;
	padding: 3px 10px;
	border: none;
}
.fileupload input.upload {
	cursor: pointer;
	filter: alpha(opacity=0);
	font-size: 20px;
	margin: 0;
	opacity: 0;
	padding: 0;
	position: absolute;
	right: -3px;
	top: -3px;
	padding: 5px;
}
.btn-text {
	color: #fff;
}
.submit-section {
	text-align: center;
	margin-top: 40px;
}
.submit-btn {
    border-radius: 50px;
    font-size: 18px;
    font-weight: 600;
    min-width: 200px;
    padding: 10px 20px;
}
.form-scroll {
    max-height: 400px;
    overflow-y: auto;
}
.profile-img-wrap.edit-img {
    border-radius: 50%;
    margin: 0 auto 30px;
    position: relative;
}
.profile-img-wrap.edit-img .fileupload.btn {
	left: 0;
}

/*-----------------
	19. Chat
-----------------------*/

.chat-avatar-sm {
    display: inline-block;
    float: left;
    margin-left: 0 !important;
    margin-right: 10px;
    position: relative;
    width: 24px;
}
.chat-avatar-sm img {
	width:24px;
}
.chat-avatar-sm.user-img .status {
	bottom: 0;
	right: -3px;
}
.chat-main-row {
	bottom: 0;
	left: 0;
	overflow: auto;
	padding-bottom: inherit;
	padding-top: inherit;
	position: absolute;
	right: 0;
	top: 0;
}
.chat-main-wrapper {
	display: table;
	height: 100%;
	table-layout: fixed;
	width: 100%;
}
.message-view {
	display: table-cell;
	height: 100%;
	float: none;
	padding: 0;
	position: static;
	vertical-align: top;
	width: 75%;
}
.chat-window {
	display: table;
	height: 100%;
	table-layout: fixed;
	width: 100%;
	background-color: #f7f7f7;
}
.fixed-header {
	background-color: #fff;
	border-bottom: 1px solid #eaeaea;
	padding: 10px 15px;
}
.fixed-header .navbar {
	border: 0 none;
	margin: 0;
	min-height: auto;
	padding: 0;
}
.fixed-header .user-info a {
	color: #555;
	text-transform: uppercase;
}
.typing-text {
	color: #00c5fb;
	font-size: 12px;
	text-transform: lowercase;
}
.last-seen {
	color: #888;
	display: block;
	font-size: 12px;
}
.custom-menu {
	margin-top: 6px;
}
.fixed-header .custom-menu {
	margin: 0 0 1px;
}
.custom-menu.nav > li > a {
    color: #bbb;
    font-size: 26px;
    line-height: 32px;
    margin-left: 15px;
    padding: 0;
}
.custom-menu.navbar-nav > li > a:hover,
.custom-menu.navbar-nav > li > a:focus {
	background-color: transparent;
}
.custom-menu .dropdown-menu {
	left: auto;
	right: 0;
}
.search-box {
	margin-top: 5px;
}
.search-box .input-group {
    background-color: #f7f7f7;
    border: 1px solid #e3e3e3;
    border-radius: 50px;
}
.search-box .input-group .form-control {
	background: transparent;
	border: none;
}
.search-box .btn {
	background-color: transparent;
}
.search-input {
	border-radius: 5px;
}
.chat-contents {
	display: table-row;
	height: 100%;
}
.chat-content-wrap {
	height: 100%;
	position: relative;
	width: 100%;
}
.chat-wrap-inner {
	bottom: 0;
	left: 0;
	overflow: auto;
	position: absolute;
	right: 0;
	top: 0;
}
.chats {
	padding: 30px 15px;
}
.chat-body {
	display: block;
	margin: 10px 0 0;
	overflow: hidden;
}
.chat-body:first-child {
	margin-top: 0
}
.chat-right .chat-content {
    background-color: #f2f2f2;
    border: 1px solid #e3e3e3;
    border-radius: 20px 2px 2px 20px;
    clear: both;
    color: #727272;
    display: block;
    float: right;
    margin: 0;
    max-width: 60%;
    padding: 8px 15px;
    position: relative;
}
.chat-right .chat-body {
	padding-left: 48px;
	padding-right: 10px;
}
.chat-bubble {
	display: block;
	width: 100%;
	float: left;
	margin-bottom: 10px;
}
.chat-bubble:hover .chat-action-btns {
	display: block;
	float: left;
}
.chat-right .chat-bubble:hover .chat-action-btns {
	float: right;
	display: block;
}
.chat.chat-right .chat-bubble:last-child .chat-content {
	border-bottom-right-radius: 20px;
}
.chat.chat-right .chat-bubble:first-child .chat-content {
	border-top-right-radius: 20px;
}
.chat-content > p {
	margin-bottom: 0;
}
.chat-time {
	color: rgba(0, 0, 0, 0.5);
	display: block;
	font-size: 12px;
}
.chat-right .chat-time {
	text-align: right;
}
.chat-bubble .chat-action-btns {
	display: none;
}
.chat-action-btns {
	float: right;
}
.chat-action-btns ul {
	list-style: none;
	padding: 0;
	margin: 15px 15px 0 15px;
}
.chat-action-btns ul > li {
	display: inline-block;
	margin-left: 5px;
	font-size: 18px;
}
.chat-right .chat-action-btns {
	float: left;
}
.chat-bubble .chat-action-btns a {
	color: #8c8c8c;
}
.chat-line {
	border-bottom: 1px solid #eaeaea;
	height: 12px;
	margin: 7px 0 20px;
	position: relative;
	text-align: center;
}
.chat-date {
	background-color: #f7f7f7;
	color: #727272;
	font-size: 12px;
	padding: 0 11px;
}
.chat-avatar {
	float: right;
}
.chat-avatar .avatar {
	line-height: 30px;
	height: 30px;
	width: 30px;
}
.chat-left .chat-avatar {
	float: left
}
.chat-left .chat-body {
	margin-right: 0;
	margin-left: 30px;
	padding-right: 20px;
}
.chat-left .chat-content {
	background-color: #fff;
	border: 1px solid #eaeaea;
	color: #888;
	float: left;
	position: relative;
	padding: 8px 15px;
	border-radius: 2px 20px 20px 2px;
	max-width: 60%;
}
.avatar {
	background-color: #aaa;
	border-radius: 50%;
	color: #fff;
	display: inline-block;
	font-weight: 500;
	height: 38px;
	line-height: 38px;
	margin: 0 10px 0 0;
	text-align: center;
	text-decoration: none;
	text-transform: uppercase;
	vertical-align: middle;
	width: 38px;
	position: relative;
	white-space: nowrap;
}
.avatar:hover {
	color: #fff;
}
.avatar.avatar-xs {
	width: 24px;
	height: 24px
}
.avatar > img {
    border-radius: 50%;
    display: block;
    overflow: hidden;
    width: 100%;
}
.chat.chat-left .chat-bubble:first-child .chat-content {
	border-top-left-radius: 20px;
	margin-top: 0;
}
.chat.chat-left .chat-bubble:last-child .chat-content {
	border-bottom-left-radius: 20px;
}
.chat-left .chat-time {
	color: #a9a9a9
}
.attach-list {
	color: #a3a3a3;
	padding: 5px 0 0;
	line-height: 24px;
	margin: 0;
	list-style: none;
}
.attach-list i {
	margin-right: 3px;
	font-size: 16px;
}
.chat-footer {
	background-color: #fff;
	border-top: 1px solid #eaeaea;
	padding: 15px;
}
.message-bar {
	display: table;
	height: 44px;
	position: relative;
	width: 100%;
}
.message-bar .message-inner {
	display: table-row;
	height: 100%;
	padding: 0 8px;
	width: 100%;
}
.message-bar .link {
	color: #777;
	display: table-cell;
	font-size: 20px;
	padding: 0 10px;
	position: relative;
	vertical-align: middle;
	width: 30px;
}
.message-bar .message-area {
	display: table-cell;
}
.message-area .input-group .form-control {
    background-color: #fff;
    border: 1px solid #eaeaea;
    box-shadow: none;
    color: #555;
    display: block;
    font-size: 14px;
    height: 44px;
    margin: 0;
    padding: 6px 12px;
    resize: none;
}
.message-area .btn {
	height: 44px;
	width: 50px;
}
.profile-right {
	display: table-cell;
	height: 100%;
	float: none;
	padding: 0;
	position: static;
	vertical-align: top;
}
.display-table {
	display: table;
	table-layout: fixed;
	border-spacing: 0;
	width: 100%;
	height: 100%;
}
.table-row {
	display: table-row;
	height: 100%;
}
.table-body {
	position: relative;
	height: 100%;
	width: 100%;
}
.table-content {
	bottom: 0;
	left: 0;
	overflow: auto;
	position: absolute;
	right: 0;
	top: 0;
}
.chat-profile-img {
	padding: 30px;
	position: relative;
	text-align: center;
}
.edit-profile-img {
	height: 120px;
	margin: 0 auto;
	position: relative;
	width: 120px;
	cursor: pointer;
}
.edit-profile-img img {
	border-radius: 50%;
	height: auto;
	margin: 0;
	width: 120px;
}
.change-img {
	background-color: rgba(0, 0, 0, 0.3);
	border-radius: 50%;
	color: #fff;
	display: none;
	height: 100%;
	left: 0;
	line-height: 120px;
	position: absolute;
	top: 0;
	width: 100%;
}
.edit-profile-img:hover .change-img {
	display: block;
}
.edit-profile-img img {
	height: auto;
	margin: 0;
	width: 120px;
	border-radius: 50%;
}
.user-name {
	color: #333;
}
.edit-btn {
	border-radius: 40px;
	height: 36px;
	position: absolute;
	right: 15px;
	top: 15px;
	width: 36px;
}
.chat-profile-info {
	padding: 15px;
}
.user-det-list {
	list-style: none;
	padding: 0;
}
.user-det-list > li {
	padding: 6px 15px;
}
.user-det-list .text-muted {
	color: #888;
}
.transfer-files .tab-content {
	padding-top: 0;
}
.files-list {
	list-style: none;
	padding-left: 0;
}
.files-list > li {
	border-bottom: 1px solid #eaeaea;
	border-radius: inherit;
	margin: 2px 0 0;
	padding: 10px;
}
.files-cont {
	position: relative;
}
.file-type {
	height: 48px;
	position: absolute;
	width: 48px;
}
.files-icon {
	background-color: #f3f7f9;
	border: 1px solid #e4eaec;
	border-radius: 4px;
	display: inline-block;
	height: 38px;
	line-height: 38px;
	text-align: center;
	width: 38px;
}
.files-icon i {
	color: #76838f;
	font-size: 20px;
}
.files-info {
	padding: 0 30px 0 50px;
}

.file-name a {
	color: #333;
}
.files-action {
	display: none;
	height: 30px;
	list-style: none;
	padding-left: 0;
	position: absolute;
	right: 0;
	text-align: right;
	top: 10px;
	width: 30px;
}
.files-list > li:hover .files-action {
	display: block;
}
.file-date {
	color: #888;
	font-size: 12px;
}
.file-author a {
	color: #00c5fb;
	font-size: 12px;
	text-decoration: underline;
}
.files-action .dropdown-menu {
	left: auto;
	right: 0;
}
.files-action > li > a {
	color: #777;
}
.chat-img-attach {
	border-radius: 4px;
	margin-bottom: 12px;
	margin-left: 12px;
	position: relative;
	float: right;
}
.chat-img-attach img {
	border-radius: 4px;
	display: inline-block;
	height: auto;
	max-width: 100%;
}
.chat-placeholder {
	background: rgba(69, 81, 97, 0.6);
	border-radius: 4px;
	color: #fff;
	display: flex;
	flex-direction: column;
	height: 100%;
	justify-content: flex-end;
	left: 0;
	padding: 13px;
	position: absolute;
	top: 0;
	width: 100%;
}
.chat-img-name {
	font-size: 12px;
	font-weight: 700;
	line-height: 16px;
}
.chat-file-desc {
	font-size: 11px;
}
.chat-right .chat-content.img-content {
	background-color: transparent;
	border: 0;
	color: #76838f;
	padding: 0;
	text-align: right;
}
.chat-right .img-content .chat-time {
	color: #a3a3a3;
}
.chat-left .chat-img-attach {
	float: left;
}
.chat-left .chat-img-attach {
	float: left;
	margin-left: 0;
	margin-right: 12px;
}
.input-group .form-control-lg.form-control {
	border-radius: 4px 0 0 4px;
	height: 46px;
}
.chat-user-list {
    list-style: none;
    margin: 0;
    padding: 0;
}
.chat-user-list .media {
	border-bottom: 1px solid #eaeaea;
	border-radius: inherit;
	padding: 10px;
	background-color: #fff;
}
.chat-user-list .media:hover {
    background-color: #f7f7f7;
}
.designation {
	color: #9e9e9e;
	font-size: 12px;
}
.online-date {
	color: #9e9e9e;
	font-size: 12px;
}
.drop-zone {
	width: 100%;
	height: 205px;
	border: 2px dashed #adb7be;
	text-align: center;
	padding: 25px 0 0;
	margin-bottom: 20px;
}
.drop-zone .drop-zone-caption {
	font-weight: 600;
}
.upload-list {
	padding: 0;
	list-style: none;
	margin: 0;
}
.upload-list .file-list {
	background-color: #fff;
	border-top: 1px solid #e3e3e3;
	padding: 10px 0;
}
.upload-list .file-list:first-child {
	border-top: none
}
.upload-list .upload-wrap {
	position: relative;
	padding: 0 20px 0 0;
	margin: 0 0 5px
}
.upload-list .file-name,
.upload-list .file-size {
	display: inline-block;
	vertical-align: top;
	white-space: nowrap;
}
.upload-list .file-name {
	padding-right: 15px;
	overflow: hidden;
	max-width: 100%;
	text-overflow: ellipsis
}
.upload-list .file-size {
	color: #888;
}
.upload-list .file-close {
	border: none;
	background: none;
	color: #ccc;
	position: absolute;
	right: 0;
	top: 2px;
}
.upload-list .file-close:hover {
	color: #f62d51
}
.upload-list .upload-process {
	font-size: 10px;
	color: #888;
}
.upload-list .progress {
	margin-bottom: 5px;
}
.upload-list .file-name i {
	color: #888;
	margin: 0 5px 0 0;
	vertical-align: middle;
}
.upload-drop-zone {
    background-color: #fff;
    border: 2px dashed #e3e3e3;
    color: #ccc;
    height: 200px;
    line-height: 200px;
    margin-bottom: 20px;
    text-align: center;
}
.upload-drop-zone.drop {
	color: #222;
	border-color: #222;
}
.upload-text {
	font-size: 24px;
	margin-left: 10px;
}
.files-share-list {
	border: 1px solid #eaeaea;
	border-radius: 4px;
	margin-bottom: 20px;
	padding: 15px;
}

/*-----------------
	20. Focus Label
-----------------------*/

.form-focus {
	height: 50px;
	position: relative;
}
.form-focus .focus-label {
	font-size: 16px;
	font-weight: 400;
	opacity: 0.4;
	pointer-events: none;
	position: absolute;
	-webkit-transform: translate3d(0, 22px, 0) scale(1);
	-ms-transform: translate3d(0, 22px, 0) scale(1);
	-o-transform: translate3d(0, 22px, 0) scale(1);
	transform: translate3d(0, 22px, 0) scale(1);
	transform-origin: left top;
	transition: 240ms;
	left: 12px;
	top: -8px;
	z-index: 1;
	color: #888;
	margin-bottom: 0;
}
.form-focus.focused .focus-label {
	opacity: 1;
	font-weight: 300;
	top: -14px;
	font-size: 12px;
	z-index: 1;
}
.form-focus .form-control:focus ~ .focus-label,
.form-focus .form-control:-webkit-autofill ~ .focus-label {
	opacity: 1;
	font-weight: 300;
	top: -14px;
	font-size: 12px;
	z-index: 1;
}
.form-focus .form-control {
	height: 50px;
	padding: 21px 12px 6px;
}
.form-focus .form-control::-webkit-input-placeholder {
	color: transparent;
	transition: 240ms;
}
.form-focus .form-control:focus::-webkit-input-placeholder {
	transition: none;
}
.form-focus.focused .form-control::-webkit-input-placeholder {
	color: #bbb;
}
.form-focus.select-focus .focus-label {
	opacity: 1;
	font-weight: 300;
	top: -20px;
	font-size: 12px;
	z-index: 1;
}
.form-focus .select2-container .select2-selection--single {
	border: 1px solid #e3e3e3;
	height: 50px;
}
.form-focus .select2-container--default .select2-selection--single .select2-selection__arrow {
	height: 48px;
	right: 7px;
}
.form-focus .select2-container--default .select2-selection--single .select2-selection__arrow b {
	border-color: #ccc transparent transparent;
	border-style: solid;
	border-width: 6px 6px 0;
	height: 0;
	left: 50%;
	margin-left: -10px;
	margin-top: -2px;
	position: absolute;
	top: 50%;
	width: 0;
}
.form-focus .select2-container--default.select2-container--open .select2-selection--single .select2-selection__arrow b {
	border-color: transparent transparent #ccc;
	border-width: 0 6px 6px;
}
.form-focus .select2-container .select2-selection--single .select2-selection__rendered {
	padding-right: 30px;
	padding-left: 12px;
	padding-top: 10px;
}
.form-focus .select2-container--default .select2-selection--single .select2-selection__rendered {
	color: #676767;
	font-size: 14px;
	font-weight: normal;
	line-height: 38px;
}
.form-focus .select2-container--default .select2-results__option--highlighted[aria-selected] {
	background-color: #fc6075;
}

/*-----------------
	21. Leave
-----------------------*/

.filter-row .btn {
	min-height: 50px;
	padding: 12px;
	text-transform: uppercase;
}
.action-label .label {
	display: inline-block;
	min-width: 85px;
	padding: 0.5em 0.6em;
}
.action-label i {
	margin-right: 3px;
}
.action-label .dropdown-menu .dropdown-item {
    padding: 5px 10px;
}

/*-----------------
	22. Employee
-----------------------*/

.action-icon {
	color: #777;
	font-size: 18px;
	display: inline-block;
}
.table .dropdown-menu {
    font-size: 13px;
    min-width: 120px;
    padding: 0;
}
.table .dropdown-menu .dropdown-item {
	padding: 5px 10px;
}
.dropdown-action .dropdown-toggle::after {
	display: none;
}
.profile-widget {
	background-color: #fff;
	border: 1px solid #ededed;
	border-radius: 4px;
	margin-bottom: 30px;
	padding: 20px;
	text-align: center;
	position: relative;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.2);
	overflow: hidden;
}
.profile-widget .user-name > a {
	color: #333;
}
.dropdown.profile-action {
	position: absolute;
	right: 5px;
	text-align: right;
	top: 10px;
}
.profile-action .dropdown-toggle::after {
	display: none;
}
.profile-img {
	cursor: pointer;
	height: 80px;
	margin: 0 auto;
	position: relative;
	width: 80px;
}
.profile-img .avatar {
	font-size: 24px;
	height: 80px;
	line-height: 80px;
	margin: 0;
	width: 80px;
}
.mobile-no > a {
	color: #777;
	display: inline-block;
}
.staff-mail > a {
	color: #777;
	display: inline-block;
	margin-top: 5px;
}
.staff-action-btns {
	margin-top: 10px;
}
.staff-id {
    font-size: 14px;
    font-weight: 500;
    margin-top: 5px;
}
.view-icons {
	float: right;
	margin-right: 10px;
}
.view-icons .btn {
	background-color: #fff;
    border: 1px solid #e3e3e3;
	color: #888;
	font-size: 18px;
	margin-right: 5px;
	min-width: 40px;
	padding: 4px;
}
.view-icons .btn.active {
	color: #333;
}

/*-----------------
	23. Events
-----------------------*/

.calendar {
	float: left;
	margin-bottom: 0;
}
.fc-view {
	margin-top: 30px;
}
.none-border .modal-footer {
	border-top: none;
}
.fc-toolbar h2 {
	font-size: 18px;
	font-weight: 600;
	font-family: 'CircularStd', sans-serif;
	line-height: 30px;
	text-transform: uppercase;
}
.fc-day-grid-event .fc-time {
	font-family: 'CircularStd', sans-serif;
}
.fc-day {
	background: #fff;
}
.fc-toolbar .fc-state-active,
.fc-toolbar .ui-state-active,
.fc-toolbar button:focus,
.fc-toolbar button:hover,
.fc-toolbar .ui-state-hover {
	z-index: 0;
}
.fc th.fc-widget-header {
	background: #eeeeee;
	font-size: 14px;
	line-height: 20px;
	padding: 10px 0;
	text-transform: uppercase;
}
.fc-unthemed th,
.fc-unthemed td,
.fc-unthemed thead,
.fc-unthemed tbody,
.fc-unthemed .fc-divider,
.fc-unthemed .fc-row,
.fc-unthemed .fc-popover {
	border-color: #f3f3f3;
}
.fc-button {
	background: #f1f1f1;
	border: none;
	color: #797979;
	text-transform: capitalize;
	box-shadow: none !important;
	border-radius: 3px !important;
	margin: 0 3px !important;
	padding: 6px 12px !important;
	height: auto !important;
}
.fc-text-arrow {
	font-family: inherit;
	font-size: 16px;
}
.fc-state-hover {
	background: #f3f3f3;
}
.fc-state-highlight {
	background: #f0f0f0;
}
.fc-state-down,
.fc-state-active,
.fc-state-disabled {
	background-color: #00c5fb !important;
	color: #fff !important;
	text-shadow: none !important;
}
.fc-cell-overlay {
	background: #f0f0f0;
}
.fc-unthemed .fc-today {
	background: #fff;
}
.fc-event {
	border-radius: 2px;
	border: none;
	cursor: move;
	font-size: 13px;
	margin: 1px 7px;
	padding: 5px 5px;
	text-align: center;
}
.external-event {
	cursor: move;
	margin: 10px 0;
	padding: 6px 10px;
}
.external-event.bg-primary {
	background-color: rgba(127, 193, 252, 0.3) !important;
	color: #7fc1fc;
}
.external-event.bg-success {
	background-color: rgba(75, 211, 150, 0.3) !important;
	color: #4bd396;
}
.external-event.bg-info {
	background-color: rgba(58, 201, 214, 0.3) !important;
	color: #3ac9d6;
}
.external-event.bg-warning {
	background-color: rgba(249, 200, 81, 0.3) !important;
	color: #f9c851;
}
.external-event.bg-danger {
	background-color: rgba(245, 112, 122, 0.3) !important;
	color: #f5707a;
}
.external-event.bg-pink {
	background-color: rgba(240, 98, 146, 0.3) !important;
	color: #f06292;
}
.external-event.bg-purple {
	background-color: rgba(107, 95, 181, 0.3) !important;
	color: #6b5fb5;
}
.external-event.bg-inverse {
	background-color: rgba(59, 62, 71, 0.3) !important;
	color: #3b3e47;
}
.external-event.bg-orange {
	background-color: rgba(255, 152, 0, 0.3) !important;
	color: #ff9800;
}
.external-event.bg-brown {
	background-color: rgba(141, 110, 99, 0.3) !important;
	color: #8d6e63;
}
.external-event.bg-teal {
	background-color: rgba(38, 166, 154, 0.3) !important;
	color: #26a69a;
}
.fc-basic-view td.fc-week-number span {
	padding-right: 8px;
	font-weight: 700;
	font-family: 'CircularStd', sans-serif;
}
.fc-basic-view td.fc-day-number {
	padding-right: 8px;
	font-weight: 700;
	font-family: 'CircularStd', sans-serif;
}
.event-form .input-group .form-control {
	height: 40px;
}

/*-----------------
	24. Profile
-----------------------*/

.profile-details {
	text-align: center;
}
.personal-info li .title {
	color: #4f4f4f;
	float: left;
	font-weight: 500;
	margin-right: 30px;
	width: 25%;
}
.personal-info li .text {
	color: #8e8e8e;
	display: block;
	overflow: hidden;
}
.personal-info li {
	margin-bottom: 10px;
}
.personal-info {
	list-style: none;
	margin-bottom: 0;
	padding: 0;
}
.profile-view {
	position: relative;
}
.profile-view .profile-img-wrap {
	height: 120px;
	width: 120px;
}
.profile-view .profile-img {
	width: 120px;
	height: 120px;
}
.profile-view .profile-img .avatar {
	font-size: 24px;
	height: 120px;
	line-height: 120px;
	margin: 0;
	width: 120px;
}
.profile-view .profile-basic {
    margin-left: 140px;
    padding-right: 50px;
}
.profile-view .pro-edit {
    position: absolute;
    right: 0;
    top: 0;
}
.edit-icon {
    background-color: #eee;
    border: 1px solid #e3e3e3;
    border-radius: 24px;
    color: #bbb;
    float: right;
    font-size: 12px;
    line-height: 24px;
    min-height: 26px;
    text-align: center;
    width: 26px;
}
.edit-icon:hover {
	background-color: #00c5fb;
	border-color: #00c5fb;
    color: #fff;
}
.delete-icon {
    color: #e30b0b;
    float: right;
    font-size: 18px;
}
.delete-icon:hover {
    color: #e30b0b;
}
.staff-msg {
	margin-top: 30px;
}
.experience-box {
	position: relative;
}
.experience-list {
	list-style: none;
	margin: 0;
	padding: 0;
	position: relative;
}
.experience-list::before {
	background: #ddd;
	bottom: 0;
	content: "";
	left: 8px;
	position: absolute;
	top: 8px;
	width: 2px;
}
.experience-list > li {
	position: relative;
}
.experience-list > li:last-child .experience-content {
	margin-bottom: 0;
}
.experience-user .avatar {
	height: 32px;
	line-height: 32px;
	margin: 0;
	width: 32px;
}
.experience-list > li .experience-user {
	background: #fff;
	height: 10px;
	left: 4px;
	margin: 0;
	padding: 0;
	position: absolute;
	top: 4px;
	width: 10px;
}
.experience-list > li .experience-content {
	background-color: #fff;
	margin: 0 0 20px 40px;
	padding: 0;
	position: relative;
}
.experience-list > li .experience-content .timeline-content {
	color: #9e9e9e;
}
.experience-list > li .experience-content .timeline-content a.name {
	color: #616161;
	font-weight: bold;
}
.experience-list > li .time {
	color: #bdbdbd;
	display: block;
	font-size: 12px;
	line-height: 1.35;
}
.before-circle {
	background-color: #ddd;
	border-radius: 50%;
	height: 10px;
	width: 10px;
}
.skills > span {
	border: 1px solid #ccc;
	border-radius: 500px;
	display: inline-block;
	margin-bottom: 10px;
	padding: 6px 12px;
	text-align: center;
}
.profile-info-left {
	border-right: 2px dashed #ccc;
}
.card-box.user-box {
    min-height: 240px;
}
.bootstrap-tagsinput {
    background-color: #fff;
    border: 1px solid #e3e3e3;
    border-radius: 0;
    box-shadow: unset;
    display: block;
    min-height: 44px;
    padding: 6px 6px 0;
}
.bootstrap-tagsinput .badge {
    font-size: 14px;
    font-weight: normal;
    margin-bottom: 6px;
    padding: 10px 15px;
}
.add-more a {
	color: #00c5fb;
}
.add-more a:hover {
	color: #00b7ed;
}
.avatar-box {
    float: left;
}
.pro-overview .personal-info li .title {
	width: 50%;
}
.profile-box {
	min-height: 250px;
}

/*-----------------
	25. Notifications
-----------------------*/

.notifications {
	padding: 0;
}
.notifications .noti-content {
	height: 290px;
	width: 350px;
	overflow-y: auto;
	position: relative;
}
.notifications .notification-heading {
	margin: 0;
	font-size: 14px;
	font-weight: normal;
	line-height: 1.45;
	color: #616161;
}
.notifications .notification-time {
	font-size: 12px;
	line-height: 1.35;
	color: #bdbdbd;
}
.notification-list {
	list-style: none;
	padding: 0;
	margin: 0;
}
.notifications ul.notification-list > li{
	margin-top: 0;
	border-bottom: 1px solid #f5f5f5;
}
.notifications ul.notification-list > li:last-child {
	border-bottom: none;
}
.notifications ul.notification-list > li a {
	display: block;
	padding: 12px;
	border-radius: 2px;
}
.notifications ul.notification-list > li a:hover {
	background-color: #fafafa;
}
.notifications ul.notification-list > li .list-item {
    border: 0;
    padding: 0;
    position: relative;
}
.notifications .media {
	margin-top: 0;
	border-bottom: 1px solid #f5f5f5;
}
.notifications .media:last-child {
	border-bottom: none;
}
.notifications .media a {
	display: block;
	padding: 12px;
	border-radius: 2px;
}
.notifications .media a:hover {
	background-color: #fafafa;
}
.notifications .media-list .media-left {
	padding-right: 8px;
}
.topnav-dropdown-header {
	border-bottom: 1px solid #eee;
	text-align: center;
}
.topnav-dropdown-header,
.topnav-dropdown-footer {
	font-size: 12px;
	height: 32px;
	line-height: 32px;
	padding-left: 12px;
	padding-right: 12px;
}
.topnav-dropdown-header .notification-title {
    color: #333;
    display: block;
    float: left;
    font-size: 14px;
}
.topnav-dropdown-header .clear-noti {
    color: #f83f37;
    float: right;
    font-size: 11px;
    text-transform: uppercase;
}
.topnav-dropdown-footer a {
	display: block;
	text-align: center;
	color: #333;
}
.user-menu.nav > li > a .badge {
    color: #fff;
    font-weight: 700;
    position: absolute;
    right: 3px;
    top: 6px;
}
.user-menu.nav > li > a .badge {
	background-color: #7460ee;
}
.user-menu.nav > li > a > i {
	font-size: 20px;
	line-height: 60px;
}
.noti-details {
    color: #989c9e;
    margin-bottom: 0;
}
.noti-title {
	color: #333;
}
.noti-time {
    margin: 0;
}

/*-----------------
	26. Roles & Permissions
-----------------------*/

.roles-menu {
	margin-top: 20px;
}
.roles-menu > ul {
    background-color: #fff;
    border: 1px solid #e3e3e3;
    list-style: none;
    margin: 0;
    padding: 0;
}
.roles-menu > ul > li {
	display: block;
	position: relative;
}
.roles-menu > ul > li a {
	border-left: 3px solid transparent;
    color: #333;
    display: block;
    padding: 10px 15px;
    position: relative;
}
.roles-menu > ul > li.active a {
	border-color: #00c5fb;
	color: #00c5fb;
}
.roles-menu > ul > li a:hover {
    background-color: #eee;
	border-color: #00c5fb;
}
.role-action {
	float: right;
	display: none;
}
.roles-menu > ul > li a:hover .role-action {
	display: block;
}
.slide-nav .sidebar {
	margin-left: 0;
}

/*-----------------
	27. Chat Right Sidebar
-----------------------*/

.fixed-header .custom-menu {
	margin: 1px 0 0;
}
.topnav-dropdown-footer {
	border-top: 1px solid #eee;
}
.list-box {
	list-style: none;
	padding-left: 0;
}
.list-item {
	border-bottom: 1px solid #eaeaea;
	padding: 10px;
	position: relative;
}
.list-left {
	height: 48px;
	position: absolute;
	width: 48px;
}
.files-icon {
	background-color: #f5f5f5;
	border: 1px solid #ddd;
	border-radius: 4px;
	display: inline-block;
	height: 38px;
	line-height: 38px;
	text-align: center;
	width: 38px;
}
.files-icon i {
	color: #777;
	font-size: 20px;
}
.list-body {
	padding: 0 0 0 50px;
}
.message-author {
	color: #333;
	float: left;
	font-weight: 500;
	width: 175px;
	display: block;
	max-width: 100%;
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: nowrap;
}
.message-time {
	color: #888;
	float: right;
	font-size: 11px;
}
.message-content {
	color: #333;
	font-size: 13px;
	display: block;
	max-width: 100%;
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: nowrap;
}
.file-author a {
	color: #00c5fb;
	font-size: 12px;
	text-decoration: underline;
}
.files-action .dropdown-menu {
	left: auto;
	right: 0;
}

/*-----------------
	28. Projects
-----------------------*/

.team-members {
    display: inline-flex;
    flex-wrap: wrap;
    list-style: none;
    margin-bottom: 0;
    padding: 0;
}
.team-members > li:first-child a {
	margin-left: 0;
}
.team-members > li > a {
	border: 2px solid #fff;
	border-radius: 100%;
	display: block;
	height: 30px;
	overflow: hidden;
	width: 30px;
}
.team-members .all-users {
	line-height: 28px;
	opacity: 0.8;
}
.all-users {
	background-color: #ff5e3a;
	color: #fff;
	font-size: 10px;
	font-weight: 800;
	line-height: 34px;
	text-align: center;
}
.all-users:hover, .all-users:active {
	color: #fff;
}
.team-members img {
	width: 100%;
}
.project-title {
	margin: 0 0 5px;
}
.project-title > h5 {
	font-size: 16px;
	margin-bottom: 0;
	margin-top: 0;
}
.project-title > a {
	color: #333;
}
.project-box {
	position: relative;
}
.avatar-dropdown .dropdown-menu {
    min-width: unset;
    width: 100px;
    padding: 0;
}
.avatar-dropdown .avatar-group {
    min-height: 88px;
    padding: 2px;
    white-space: normal;
}
.avatar-dropdown .avatar-group .avatar {
    margin: 2px;
}
.avatar-dropdown .avatar-pagination {
    border-top: 1px solid rgba(0, 0, 0, 0.1);
}
.avatar-dropdown .page-link {
    padding: .3rem 0.55rem;
    border-radius: 0 !important;
    border: 0;
}
.avatar-dropdown .dropdown-toggle::after {
	display: none;
}

/*-----------------
	29. Invoice
-----------------------*/

.invoice-details,
.invoice-payment-details > li span {
	float: right;
	text-align: right;
}
.table .team-members {
	flex-wrap: nowrap;
}
.table .team-members > li > a {
	width: 32px;
	height: 32px;
}
.table .team-members .all-users {
	line-height: 30px;
}
.attach-files > ul {
	list-style: none;
	margin: 0;
	padding: 0;
}
.attach-files li {
	display: inline-block;
	margin-right: 10px;
	position: relative;
}
.attach-files li img {
	width: 50px;
}
.file-remove {
	color: #f00;
	position: absolute;
	right: -6px;
	top: -7px;
}
.attach-files li:last-child {
	margin-right: 0;
}
.inv-logo {
	height: auto;
	margin-bottom: 20px;
	max-height: 100px;
	width: auto;
}

/*-----------------
	30. Task
-----------------------*/

.task-chat-contents {
	background-color: #fff;
}
.task-chat-contents .chat-left .chat-content {
	max-width: 100%;
}
.task-chat-view {
	border-left: 1px solid #eaeaea;
}
.task-left-sidebar {
	width: 58.3333%;
}
.task-right-sidebar {
	width: 41.6667%;
}
.task-chat-view .chat-left .chat-content {
	border: 0;
	padding: 0;
}
.task-chat-view .chat-left .chat-body {
	margin-left: 50px;
}
.task-chat-view .chat-date {
	background-color: #fff;
}
.task-chat-view .chats {
	padding: 15px 15px 30px;
}
.task-chat-view .avatar {
	width: 30px;
	height: 30px;
	line-height: 30px;
}
.followers-add {
	background-color: #fff;
	border: 1px solid #ccc;
	border-radius: 50%;
	color: #ccc;
	display: inline-block;
	font-size: 20px;
	height: 30px;
	line-height: 30px;
	text-align: center;
	width: 30px;
}
.followers-add:hover {
	border: 1px solid #8c8c8c;
	color: #8c8c8c;
}
.completed-task-msg {
	margin-bottom: 30px;
	margin-left: 50px;
}
.task-chat-contents .chat.chat-left {
	margin-bottom: 20px;
}
.file-attached {
	color: #333;
	font-size: 13px;
}
.file-attached i {
	font-size: 16px;
}
.task-attach-img > img {
	border: 1px solid #eaeaea;
	max-width: 100%;
}
.attach-img-download {
	margin-bottom: 5px;
}
.task-chat-view .chat-left .chat-time {
	color: #a3a3a3;
	display: inline-block;
	font-size: 11px;
}
.task-chat-user {
	color: #333;
	font-size: 13px;
}
.task-chat-view .chat-content > p {
	font-size: 13px;
	margin-bottom: 0;
}
.task-time {
	color: #a3a3a3;
	display: inline-block;
	font-size: 11px;
}
.task-success {
	color: #55ce63;
	font-size: 13px;
}
.task-success a {
	color: #55ce63;
}
.task-attach-img {
	margin-bottom: 20px;
}
.task-assign {
	float: left;
}
.assign-title {
	float: left;
	margin-right: 10px;
	margin-top: 5px;
}
.task-assign > a {
	float: left;
}
.followers-add > i {
	line-height: 28px;
}
.task-followers {
	display: flex;
	margin-top: 15px;
}
.followers-title {
	margin: 5px 10px 0 0;
}
.task-line {
	border-color: #eaeaea;
}
.task-information {
	color: #a3a3a3;
	font-size: 11px;
	line-height: 17px;
	min-width: 1px;
	margin-left: 50px;
}
.task-info-line {
	overflow-wrap: break-word;
}
.task-user {
	color: #888;
	font-weight: 500;
}
.task-information .task-time {
	display: inline-block;
	padding-left: 10px;
}
.task-btn-right {
	display: none !important;
}
.task:hover .task-btn-right {
	display: table-cell !important;
}
.task-action-btn.task-check {
	text-align: left !important;
	width: 40px;
}
.add-task-btn {
	cursor: pointer;
	padding: 6px 10px;
	text-transform: uppercase;
}
.action-circle {
	background-color: #fff;
	border: 1px solid #ccc;
	border-radius: 100%;
	height: 20px;
	width: 20px;
	display: inline-block;
	text-align: center;
	cursor: pointer;
	-webkit-transition: all 300ms ease;
	-moz-transition: all 300ms ease;
	-ms-transition: all 300ms ease;
	-o-transition: all 300ms ease;
	transition: all 300ms ease;
}
.action-circle .material-icons {
	color: #ccc;
	font-size: 18px;
	vertical-align: -3px;
}
.action-circle.completed {
	background: #35BA67;
	border: 1px solid #2fa65c;
}
.action-circle.completed .material-icons {
	color: #fff;
}
.action-circle.large {
	height: 24px;
	width: 24px;
}
.action-circle.large .material-icons {
	font-size: 16px;
	vertical-align: -4px;
}
.task-wrapper {
	padding: 20px;
	width: 100%;
	margin: 0 auto;
	box-sizing: border-box;
}
.task-wrapper .mark-all-tasks {
	text-align: right;
	padding-bottom: 15px;
}
.task-wrapper .mark-all-tasks .mark-all-tasks-container {
	overflow: hidden;
	position: relative;
}
.task-wrapper .mark-all-tasks .mark-all-btn {
	cursor: pointer;
	display: inline-block;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.task-wrapper .mark-all-tasks .mark-all-btn#mark-all-finished {
	color: #35BA67;
}
.task-wrapper .mark-all-tasks .mark-all-btn#mark-all-incomplete {
	color: #666;
}
.task-wrapper .mark-all-tasks .mark-all-btn#mark-all-incomplete .action-circle {
	border: 1px solid #666;
}
.task-wrapper .mark-all-tasks .mark-all-btn#mark-all-incomplete .action-circle .material-icons {
	color: #666;
}
.task-wrapper .mark-all-tasks .mark-all-btn.move-up {
	-webkit-transform: translateY(-30px);
	-moz-transform: translateY(-30px);
	-ms-transform: translateY(-30px);
	-o-transform: translateY(-30px);
	transform: translateY(-30px);
	position: absolute;
	right: 0;
}
.task-wrapper .mark-all-tasks .mark-all-btn.move-down {
	-webkit-transform: translateY(30px);
	-moz-transform: translateY(30px);
	-ms-transform: translateY(30px);
	-o-transform: translateY(30px);
	transform: translateY(30px);
	position: absolute;
	right: 0;
}
.task-wrapper .task-list-header h3,
.task-wrapper .task-list-footer h3 {
	font-size: 24px;
	font-weight: 400;
	color: #666;
}
.task-wrapper .task-list-body {
	max-height: 500px;
	overflow: auto;
}
.task-wrapper #task-list {
	list-style: none;
	margin: 0;
	padding: 0;
	border-bottom: 1px solid #eaeaea;
}
.task-wrapper #task-list li {
	margin: 0;
	padding: 0;
}
.task-wrapper #task-list li .task-container {
	display: table;
	background: #fff;
	padding: 8px 15px;
	width: 100%;
	border: 1px solid #eaeaea;
	border-bottom: none;
	box-sizing: border-box;
	position: relative;
	-webkit-transition: background 200ms ease;
	-moz-transition: background 200ms ease;
	-ms-transition: background 200ms ease;
	-o-transition: background 200ms ease;
	transition: background 200ms ease;
}
.task-wrapper #task-list li .task-container .task-label {
	display: table-cell;
	font-weight: 400;
	vertical-align: middle;
	color: #333;
	word-break: break-all;
}
.task-wrapper #task-list li .task-container .task-action-btn {
	display: table-cell;
	vertical-align: middle;
	text-align: right;
}
.task-wrapper #task-list li .task-container .task-action-btn .action-circle:hover {
	border: 1px solid #8c8c8c;
	background: #fff;
}
.task-wrapper #task-list li .task-container .task-action-btn .action-circle:hover .material-icons {
	color: #8c8c8c;
}
.task-wrapper #task-list li .task-container:hover {
	background: #EBEEEF;
}
.task-wrapper #task-list li.completed .task-container {
	background: #f9f9f9;
}
.task-wrapper #task-list li.completed .task-container .complete-btn {
	background: #35BA67;
	border: 1px solid #2fa65c;
}
.task-wrapper #task-list li.completed .task-container .complete-btn .material-icons {
	color: #fff;
}
.task-wrapper #task-list li.completed .task-container .complete-btn:hover {
	background: #35BA67;
	border: 1px solid #2fa65c;
}
.task-wrapper #task-list li.completed .task-container .complete-btn:hover .material-icons {
	color: #fff;
}
.task-wrapper #task-list li.completed .task-container .task-label {
	color: #ccc;
}
.task-wrapper #task-list li.new .task-container {
	-webkit-animation: taskHighlighter 2000ms linear 1;
	animation: taskHighlighter 2000ms linear 1;
}
.task-wrapper .task-list-footer {
	position: relative;
}
.task-wrapper .task-list-footer .add-task-btn-wrapper {
	text-align: center;
}
.task-wrapper .task-list-footer .add-task-btn {
	cursor: pointer;
	border: 2px solid #9B1BCC;
	display: inline-block;
	height: 35px;
	width: 35px;
	border-radius: 10px;
	-webkit-transition: all 300ms ease;
	-moz-transition: all 300ms ease;
	-ms-transition: all 300ms ease;
	-o-transition: all 300ms ease;
	transition: all 300ms ease;
}
.task-wrapper .task-list-footer .add-task-btn.hide {
	opacity: 1;
	visibility: visible;
	display: block;
}
.task-wrapper .task-list-footer .add-task-btn:hover {
	background: #9B1BCC;
}
.task-wrapper .task-list-footer .add-task-btn:hover .material-icons {
	color: #EBEEEF;
}
.task-wrapper .task-list-footer .add-task-btn .material-icons {
	color: #9B1BCC;
	font-size: 34px;
}
.task-wrapper .task-list-footer .new-task-wrapper {
	-webkit-transition: all 300ms ease;
	-moz-transition: all 300ms ease;
	-ms-transition: all 300ms ease;
	-o-transition: all 300ms ease;
	transition: all 300ms ease;
	max-height: 0;
	overflow: hidden;
}
.task-wrapper .task-list-footer .new-task-wrapper::after {
	content: "";
	display: block;
	clear: both;
}
.task-wrapper .task-list-footer .new-task-wrapper textarea {
	box-sizing: border-box;
	width: 100%;
	border: 1px solid #eaeaea;
	border-top: 0;
	height: 45px;
	resize: none;
	padding: 10px 15px;
	margin-bottom: 20px;
	-webkit-transition: all 300ms ease;
	-moz-transition: all 300ms ease;
	-ms-transition: all 300ms ease;
	-o-transition: all 300ms ease;
	transition: all 300ms ease;
}
.task-wrapper .task-list-footer .new-task-wrapper textarea:focus {
	border: 1px solid #bfbfbf;
	outline: none;
}
.task-wrapper .task-list-footer .new-task-wrapper textarea.error {
	border: 1px solid #D93737;
	outline: none;
}
.task-wrapper .task-list-footer .new-task-wrapper .error-message {
	color: #D93737;
	font-style: italic;
}
.task-wrapper .task-list-footer .new-task-wrapper .btn {
	padding: 6px 12px;
	float: right;
	cursor: pointer;
}
.task-wrapper .task-list-footer .new-task-wrapper .add-new-task-btn {
	background: #fff;
	border: 1px solid #ccc;
}
.task-wrapper .task-list-footer .new-task-wrapper.visible {
	max-height: 300px;
	overflow: auto;
}
.notification-popup {
	z-index: 1051;
	position: fixed;
	top: 20px;
	right: 10px;
	width: 300px;
	display: inline-block;
	background: #1F8FEF;
	border: 1px solid #1082e4;
	color: #fff;
	padding: 20px;
	opacity: .8;
	border-radius: 2px;
	box-sizing: border-box;
	-webkit-transition: all 300ms ease;
	-moz-transition: all 300ms ease;
	-ms-transition: all 300ms ease;
	-o-transition: all 300ms ease;
	transition: all 300ms ease;
}
.notification-popup.success {
	background: #35BA67;
	border: 1px solid #2fa65c;
}
.notification-popup p {
	margin-top: 0;
	margin-bottom: 0px;
}
.notification-popup .task {
	overflow: hidden;
	white-space: nowrap;
	text-overflow: ellipsis;
	max-width: 100%;
	display: inline-block;
}
.notification-popup .notification-text {
	font-size: 14px;
	display: inline-block;
	overflow: hidden;
}
.notification-popup.hide {
	opacity: 0;
	visibility: hidden;
}
.sidebar-overlay {
	display: none;
	position: fixed;
	z-index: 90;
	height: 100%;
	left: 0;
	top: 60px;
	width: 100%;
	z-index: 1040;
	background-color: rgba(0, 0, 0, 0.6);
}
.sidebar-overlay.opened {
	display: block;
}
.sidebar-menu.opened {
	opacity: 1;
	-webkit-transform: translateX(0px);
	-moz-transform: translateX(0px);
	-ms-transform: translateX(0px);
	-o-transform: translateX(0px);
	transform: translateX(0px);
	margin-left: 0;
}
html.menu-opened {
	overflow: hidden;
}
html.menu-opened body {
	overflow: hidden;
}
.task-chat-view.opened {
	margin-right: 0;
}
.chat-profile-view.opened {
	margin-right: 0;
}
.task-header {
    display: flex;
}
.task-header .assignee-info {
    align-items: center;
    border: 1px solid transparent;
    border-radius: 10px;
    display: inline-flex;
    flex: 0 1 180px;
    padding: 5px 10px 5px 5px;
    position: relative;
}
.task-header .assignee-info > a {
    align-items: center;
    color: #333;
    display: flex;
}
.task-header .task-head-title {
    color: #8e8e8e;
    font-size: 12px;
}
.task-assignee {
    font-size: 13px;
    max-width: 120px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.assignee-info:hover {
	border-color: #e3e3e3;
}
.remove-icon {
    align-items: center;
    background-color: #e3e3e3;
    border-radius: 50%;
    color: #333;
	cursor: pointer;
    display: flex;
    height: 20px;
    justify-content: center;
    margin-right: 10px;
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
    visibility: hidden;
    width: 20px;
}
.remove-icon:hover {
	background-color: #d3d3d3;
}
.task-header .assignee-info:hover .remove-icon {
    visibility: visible;
}
.remove-icon i {
    color: #8e8e8e;
    font-size: 12px;
}
.due-icon span {
    align-items: center;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 50%;
    color: #ccc;
    display: flex;
    height: 30px;
    justify-content: center;
    line-height: 30px;
    margin-right: 10px;
    width: 30px;
}
.due-icon span i {
    font-size: 18px;
}
.task-due-date {
    align-items: center;
    border: 1px solid transparent;
    border-radius: 10px;
    display: flex;
    flex: 0 0 160px;
    margin-left: 10px;
    padding: 5px 10px 5px 5px;
    position: relative;
}
.task-due-date:hover {
	border-color: #e3e3e3;
}
.task-header .task-due-date > a {
	align-items: center;
	color: #333;
    display: flex;
}
.due-info .due-date {
	color: #f62d51;
	font-size: 13px;
}
.task-header .task-due-date:hover .remove-icon {
    visibility: visible;
}
.task-desc {
    align-items: flex-start;
    display: flex;
    margin-bottom: 15px;
    margin-top: 5px;
}
.task-textarea {
    display: flex;
    width: 100%;
}
.task-desc-icon {
    color: #ccc;
    margin-right: 10px;
    margin-top: 5px;
}
.task-textarea  .form-control {
	border: 1px solid transparent;
	border-radius: 5px;
	font-size: 13px;
	resize: none;
}
.task-textarea:hover .form-control {
	border-color: #e3e3e3;
}
.task-complete-btn {
    align-items: center;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 5px;
    color: #333;
    display: flex;
    font-size: 14px;
    padding: 6px 10px;
}
.task-complete-btn:hover {
	background-color: #f7f7f7;
	color: #333;
}
.task-complete-btn i {
    font-size: 20px;
    margin-right: 3px;
}
.task-completed {
	background-color: #35ba67;
	border-color: #2fa65c;
	color: #fff;
}
.task-completed:hover {
	background-color: #35ba67;
	border-color: #2fa65c;
	color: #fff;
}

/*-----------------
	31. Project View
-----------------------*/

.project-user .list-box {
	margin: 0;
}
.project-files i {
	color: #76838f;
	font-size: 50px;
}
.project-user .list-item {
	border: 0 none;
	padding: 10px 0;
}
.table-border {
	border: 1px solid #ddd;
}
.file-size {
	color: #888;
}
.project-task .task-wrapper {
	padding: 0;
}
.project-task .tab-content {
	min-height: 200px;
}
.uploaded-box {
	background-color: #fff;
	border: 1px solid #ddd;
	border-radius: 4px;
	display: block;
	margin-bottom: 20px;
	padding: 4px;
}
.uploaded-box .uploaded-img-name {
	color: #333;
	padding: 9px;
	text-align:center;
}

/*-----------------
	32. Payslip
-----------------------*/

.payslip-title {
	margin-bottom: 20px;
	text-align: center;
	text-decoration: underline;
	text-transform: uppercase;
}

/*-----------------
	33. Attendance
-----------------------*/

.first-off {
    white-space: pre-wrap;
}
.stats-info {
    background-color: #fff;
    border: 1px solid #e5e5e5;
    border-radius: 4px;
    margin-bottom: 20px;
    padding: 15px;
    text-align: center;
}
.stats-info h6 {
    color: #1f1f1f;
    font-size: 16px;
    font-weight: normal;
    line-height: 18px;
    margin-bottom: 5px;
}
.stats-info h4 {
    font-size: 24px;
    margin-bottom: 0;
}
.stats-info h4 span {
	color: #727272;
	font-size: 12px;
}
.punch-det {
    background-color: #f9f9f9;
    border: 1px solid #e3e3e3;
    border-radius: 4px;
    margin-bottom: 20px;
    padding: 10px 15px;
}
.punch-det h6 {
    line-height: 20px;
    margin-bottom: 0;
}
.punch-det p {
    color: #727272;
    font-size: 14px;
    margin-bottom: 0;
}
.punch-info {
	margin-bottom: 20px;
}
.punch-hours {
    align-items: center;
    background-color: #f9f9f9;
    border: 5px solid #e3e3e3;
    border-radius: 50%;
    display: flex;
    font-size: 18px;
    height: 120px;
    justify-content: center;
    margin: 0 auto;
    width: 120px;
}
.punch-btn-section {
    margin-bottom: 20px;
    text-align: center;
}
.punch-btn {
    border-radius: 50px;
    font-size: 18px;
    font-weight: 600;
    max-width: 100%;
    padding: 8px 40px;
}
.punch-status .stats-box {
	margin-bottom: 0;
}
.stats-list {
	height: 331px;
	overflow-y: auto;
}
.att-statistics .stats-info {
	margin-bottom: 5px;
}
.att-statistics .progress {
	height: 4px;
}
.statistics .row {
	margin-left: -5px;
	margin-right: -5px;
}
.statistics .row > div {
	padding-left: 5px;
	padding-right: 5px;
}
.stats-box {
    background-color: #f9f9f9;
    border: 1px solid #e3e3e3;
    margin-bottom: 15px;
    padding: 5px;
}
.stats-box p {
	margin: 0;
	font-size: 12px;
}
.stats-box > h6 {
    margin-bottom: 0;
}
.stats-info:last-child .progress {
	margin-bottom: 0;
}
.stats-info p {
    display: flex;
    font-size: 12px;
    justify-content: space-between;
    margin-bottom: 5px;
}
.recent-activity .res-activity-list {
    height: 328px;
    list-style-type: none;
    margin-bottom: 0;
    overflow-y: auto;
    padding-left: 30px;
    position: relative;
}
.recent-activity .res-activity-list li {
    margin-bottom: 15px;
    position: relative;
}
.recent-activity .res-activity-list li:last-child {
    margin-bottom: 0;
}
.recent-activity .res-activity-list li:before {
	width: 10px;
	height: 10px;
	left: -30px;
	top: 0px;
	border: 2px solid #00c5fb;
	margin-right: 15px;
	z-index: 2;
	background: #fff;
}
.recent-activity .res-activity-list li:before {
	content: "";
	position: absolute;
	border-radius: 100%;
}
.recent-activity .res-activity-list:after {
	content: "";
	border: 1px solid #e5e5e5;
	position: absolute;
	top: 0;
	bottom: 0;
	left: 4px;
}
.recent-activity .res-activity-time {
    color: #bbb;
    font-size: 12px;
}
.recent-activity h6 {
    line-height: 14px;
    margin-bottom: 0;
}
.recent-activity p {
    font-size: 13px;
    margin-bottom: 0;
}
.half-day {
	width: 15px;
}

/*-----------------
	34. Ticket
-----------------------*/

.ticket-header {
	padding: 6px 0;
}
.ticket-priority {
	font-size: 14px;
}
.ticket-chat-view {
	width:33.3333%;
}
.dataTables_wrapper.container-fluid {
	padding-left: 0;
	padding-right: 0;
}

/*-----------------
	35. Client Profile
-----------------------*/

.tab-box {
    border-bottom: 0;
    margin-bottom: 10px;
    padding: 0;
}
.team-members a.followers-add {
	background-color: #fff;
	border: 1px solid #ccc;
	border-radius: 50%;
	color: #ccc;
	display: inline-block;
	font-size: 20px;
	height: 30px;
	line-height: 30px;
	text-align: center;
	width: 30px;
}

/*-----------------
	36. Inbox
-----------------------*/

.table-inbox input[type="radio"],
.table-inbox input[type="checkbox"] {
	cursor: pointer;
}
.mail-list {
	list-style: none;
	padding: 0;
}
.mail-list > li > a {
	color: #333;
	display: block;
	padding: 10px;
}
.mail-list > li.active > a {
	color: #00c5fb;
	font-weight: bold;
}
.unread .name,
.unread .subject,
.unread .mail-date {
	color: #000;
	font-weight: 600;
}
.table-inbox .fa-star {
	color: #ffd200;
}
.table-inbox .starred.fa-star {
	color: #ffd200;
}
.table.table-inbox > tbody > tr > td,
.table.table-inbox > tbody > tr > th,
.table.table-inbox > tfoot > tr > td,
.table.table-inbox > tfoot > tr > th,
.table.table-inbox > thead > tr > td,
.table.table-inbox > thead > tr > th {
    border-bottom: 1px solid #f2f2f2;
    border-top: 0;
}
.table-inbox {
	font-size: 14px;
	margin-bottom: 0;
}
.note-editor.note-frame {
	border: 1px solid #ccc;
	box-shadow: inherit;
}
.note-editor.note-frame .note-statusbar {
	background-color: #fff;
}
.note-editor.note-frame.fullscreen {
	top: 60px;
}
.mail-title {
	font-weight: bold;
	text-transform: uppercase;
}
.form-control.search-message {
	border-radius: 4px;
	height: 38px;
	margin-left: 5px;
	width: 180px;
}
.table-inbox tr {
	cursor: pointer;
}
table.table-inbox tbody tr.checked {
	background-color: #ffffcc;
}
.mail-label {
    font-size: 16px !important;
    margin-right: 5px;
}

/*-----------------
	37. Mail View
-----------------------*/

.attachments {
	list-style: none;
	margin: 0;
	padding: 0;
}
.attachments li {
	border: 1px solid #eee;
	float: left;
	margin-bottom: 10px;
	margin-right: 10px;
	width: 200px;
}
.attach-file {
	color: #777;
	font-size: 70px;
	padding: 10px;
	text-align: center;
	min-height: 153px;
}
.attach-file > i {
	line-height: 133px;
}
.attach-info {
	background-color: #f4f4f4;
	padding: 10px;
}
.attach-filename {
	color: #777;
	font-weight: bold;
}
.attach-filesize {
	color: #999;
	font-size: 12px;
}
.attach-file img {
	height: auto;
	max-width: 100%;
}
.mailview-header {
	border-bottom: 1px solid #ddd;
	margin-bottom: 20px;
	padding-bottom: 15px;
}
.mailview-footer {
	border-top: 1px solid #ddd;
	margin-top: 20px;
	padding-top: 15px;
}
.mailview-footer .btn-white {
	min-width: 102px;
}
.sender-img {
	float: left;
	margin-right: 10px;
	width: 40px;
}
.sender-name {
	display: block;
}
.receiver-name {
	color: #777;
}
.right-action {
	text-align: right;
}
.mail-view-title {
	font-weight: 500;
	font-size: 24px;
	margin: 0;
}
.mail-view-action {
	float: right;
}
.mail-sent-time {
	float: right;
}

/*-----------------
	38. Voice call
-----------------------*/

.voice-call-avatar {
	flex-direction: column;
	display: flex;
	align-items: center;
	justify-content: center;
	flex: 2;
}
.voice-call-avatar .call-avatar {
	margin: 15px;
	width: 150px;
	height: 150px;
	border-radius: 100%;
	border: 1px solid rgba(0, 0, 0, 0.1);
	padding: 3px;
	background-color: #fff;
}
.call-duration {
	display: inline-block;
	font-size: 30px;
	margin-top: 4px;
	position: absolute;
	left: 0;
}
.voice-call-avatar .call-timing-count {
	padding: 5px;
}
.voice-call-avatar .username {
	font-size: 18px;
	text-transform: uppercase;
}
.call-icons {
	text-align: center;
	position: relative;
}
.call-icons .call-items {
	border-radius: 5px;
	padding: 0;
	margin: 0;
	list-style: none;
	display: inline-block;
}
.call-icons .call-items .call-item {
	display: inline-block;
	text-align: center;
	margin-right: 5px;
}
.call-icons .call-items .call-item:last-child {
	margin-right: 0;
}
.call-icons .call-items .call-item a {
	color: #777;
	border: 1px solid #ddd;
	width: 50px;
	height: 50px;
	line-height: 50px;
	border-radius: 50px;
	display: inline-block;
	font-size: 20px;
}
.call-icons .call-items .call-item a i {
	width: 18px;
	height: 18px;
}
.user-video {
	bottom: 0;
	left: 0;
	overflow: auto;
	position: absolute;
	right: 0;
	top: 0;
	z-index: 10;
}
.user-video img {
	width: auto;
	max-width: 100%;
	height: auto;
	max-height: 100%;
	display: block;
	margin: 0 auto;
}
.user-video video {
	width: auto;
	max-width: 100%;
	height: auto;
	max-height: 100%;
	display: block;
	margin: 0 auto;
}
.my-video {
	position: absolute;
	z-index: 99;
	bottom: 20px;
	right: 20px;
}
.my-video ul {
	margin: 0;
	padding: 0;
	list-style: none;
}
.my-video ul li {
	float: left;
	width: 120px;
	margin-right: 10px;
}
.my-video ul li img {
	border: 3px solid #fff;
	border-radius: 6px;
}
.end-call {
	position: absolute;
	top: 7px;
	right: 0;
}
.end-call a {
    background-color: #f06060;
    border-radius: 50px;
    color: #fff;
    display: inline-block;
    line-height: 10px;
    padding: 8px 25px;
    text-transform: uppercase;
}
.call-users {
	position: absolute;
	z-index: 99;
	bottom: 20px;
	right: 20px;
}
.call-users ul {
	margin: 0;
	padding: 0;
	list-style: none;
}
.call-users ul li {
	float: left;
	width: 80px;
	margin-left: 10px;
}
.call-users ul li img {
	border-radius: 6px;
	padding: 2px;
	background-color: #fff;
	border: 1px solid rgba(0, 0, 0, 0.1);
}
.call-mute {
	width: 80px;
	height: 80px;
	background-color: rgba(0, 0, 0, 0.5);
	position: absolute;
	display: inline-block;
	text-align: center;
	line-height: 80px;
	border-radius: 6px;
	font-size: 30px;
	color: #fff;
	display: none;
	top: 0;
	border: 3px solid transparent;
}
.call-users ul li a:hover .call-mute {
	display: block;
}
.call-details {
	margin: 10px 0 0px;
	display: flex;
}
.call-info {
	margin-left: 10px;
	width: 100%;
}
.call-user-details,
.call-timing {
	display: block;
	text-overflow: ellipsis;
	overflow: hidden;
	white-space: nowrap;
}
.call-description {
	white-space: nowrap;
	vertical-align: bottom;
}
.call-timing {
	color: #727272;
	display: flex;
	font-size: 14px;
	margin-top: 1px;
	overflow: hidden;
	white-space: pre;
}

/*-----------------
	39. Video Call
-----------------------*/

.content-full {
	height: 100%;
	position: relative;
	width: 100%;
}
.video-window .fixed-header {
	padding: 0;
	border: 0;
}
.video-window .fixed-header .nav > li > a {
	padding: 18px 15px;
}

/*-----------------
	40. Outgoing Call
-----------------------*/

.call-box {
	display: block;
	background: #00c5fb;
	background: -moz-linear-gradient(left, #00c5fb 0%, #0253cc 100%);
	background: -webkit-linear-gradient(left, #00c5fb 0%, #0253cc 100%);
	background: -ms-linear-gradient(left, #00c5fb 0%, #0253cc 100%);
	background: linear-gradient(to right, #00c5fb 0%, #0253cc 100%);
	position: sticky;
	top: 0;
	z-index: 99;
	overflow-y: auto;
	overflow-x: hidden;
}
.call-box .call-wrapper {
	display: flex;
	align-items: center;
	justify-content: center;
	height: calc(100vh - 60px);
	text-align: center;
}
.call-box .call-wrapper .call-avatar {
	margin-bottom: 50px;
	cursor: pointer;
	animation: ripple 2s infinite;
}
.call-box .call-wrapper .call-user {
	margin-bottom: 50px;
}
.call-box .call-wrapper .call-user h4 {
	color: #fff;
}
.call-box .call-wrapper .call-user span {
	display: block;
	color: #fff;
	font-weight: 500;
	text-align: center;
}
.call-box .call-wrapper .call-items {
	display: flex;
	align-items: center;
	justify-content: center;
}
.call-box .call-wrapper .call-items .call-item {
    background-color: rgba(255, 255, 255, 0.2);
    border: 1px solid transparent;
    border-radius: 100%;
    color: #fff;
    line-height: 0;
    margin: 0 5px;
    padding: 15px;
}
.call-box .call-wrapper .call-items .call-item:hover {
	opacity: 0.9;
}
.call-box .call-wrapper .call-items .call-item:first-child {
	margin-top: -30px;
}
.call-box .call-wrapper .call-items .call-item:last-child {
	margin-top: -30px;
}
.call-box .call-wrapper .call-items .call-item.call-end {
	padding: 20px;
	margin: 30px 20px 0;
	background: #f06060;
	border: 1px solid #f06060;
	color: #fff;
	line-height: 0;
	border-radius: 100%;
}
.call-box .call-wrapper .call-items .call-item.call-start {
	padding: 20px;
	margin: 30px 20px 0;
	background: #55ce63;
	border: 1px solid #55ce63;
	color: #fff;
	line-height: 0;
	border-radius: 100%;
}
.call-box.incoming-box .call-wrapper .call-items .call-item.call-start {
	margin: 0 10px;
}
.call-box.incoming-box .call-wrapper .call-items .call-item.call-end {
	margin: 0 10px;
}
.call-box .call-avatar {
    border-radius: 100%;
    height: 150px;
    max-width: 150px;
    min-width: 150px;
    position: relative;
    width: 100%;
}
.call-box .btn {
    background: rgba(0, 0, 0, 0);
    transition: all 0.3s ease 0s;
}
@-webkit-keyframes ripple {
	0% {
		-webkit-box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.1);
	}
	100% {
		-webkit-box-shadow: 0 0 0 50px rgba(0, 0, 0, 0);
	}
}
@keyframes ripple {
	0% {
		-moz-box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.1);
		box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.1);
	}
	100% {
		-moz-box-shadow: 0 0 0 50px rgba(0, 0, 0, 0);
		box-shadow: 0 0 0 50px rgba(0, 0, 0, 0);
	}
}

/*-----------------
	41. Incoming Call
-----------------------*/

.incoming-btns {
	margin-top: 20px;
}

/*-----------------
	42. Contacts
-----------------------*/

.contacts-header {
	background-color: #fff;
	border-bottom: 1px solid #eaeaea;
	padding: 10px 15px;
}
.contacts-header .navbar {
	border: 0 none;
	margin: 0;
	min-height: auto;
}
.contacts-header .user-info a {
	color: #76838f;
	text-transform: uppercase;
}
.contact-left {
	display: table-cell;
	height: 100%;
	float: none;
	padding: 0;
	position: static;
	vertical-align: top;
	-webkit-transition: all 0.4s ease;
	-moz-transition: all 0.4s ease;
	transition: all 0.4s ease;
	width: 100%;
}
.contacts-list {
	position: relative;
	padding: 0 70px 0 20px;
}
.contact-list {
	list-style: none;
	padding-left: 0;
	margin: 0;
}
.contact-list > li {
	background-color: #fff;
	border-bottom: 1px solid #eaeaea;
	border-radius: inherit;
	padding: 10px;
}
.contact-cont {
	position: relative;
}
.contact-type {
	height: 48px;
	position: absolute;
	width: 48px;
}
.contact-icon {
	background-color: #f3f7f9;
	border: 1px solid #e4eaec;
	border-radius: 4px;
	display: inline-block;
	height: 38px;
	line-height: 38px;
	text-align: center;
	width: 38px;
}
.contact-icon i {
	color: #76838f;
	font-size: 20px;
}
.contact-info {
	padding: 0 30px 0 50px;
}
.contact-action {
	height: 30px;
	list-style: none;
	padding-left: 0;
	position: absolute;
	right: 0;
	text-align: right;
	top: 10px;
	width: 30px;
}
.contact-date {
	color: #888;
	font-size: 12px;
}
.contact-author a {
	color: #1d6ad2;
	font-size: 12px;
	text-decoration: underline;
}
.contact-action .dropdown-menu {
	left: auto;
	right: 0;
}
.contact-alphapets {
	background-color: #fff;
	border-left: 1px solid #ddd;
	bottom: 0;
	height: 100%;
	overflow: hidden;
	padding-bottom: 114px;
	position: fixed;
	right: 0;
	top: 114px;
	width: 50px;
}
.contact-box {
	display: inline-table;
	height: 100%;
	padding: 30px 15px;
	position: relative;
	width: 100%;
}
.alphapets-inner {
	height: 100%;
	overflow: auto;
}
.alphapets-inner a {
	display: block;
	text-align: center;
	padding: 2px;
	color: #333;
}

/*-----------------
	43. Chat Sidebar
-----------------------*/

.chat-sidebar {
	background-color: #fff;
	border-left: 1px solid #eaeaea;
	width: 300px;
}
.chat-sidebar .chat-contents {
	background-color: #fff;
}
.chat-sidebar .chat-left .chat-content {
	border: 0;
	padding: 0;
	border-radius: 0 !important;
	background-color: transparent;
	max-width: 100%;
}
.chat-sidebar .chat-left .chat-body {
	margin-left: 50px;
	padding-right: 0;
}
.chat-sidebar .chat-date {
	background-color: #fff;
}
.chat-sidebar .chats {
	padding: 15px 15px 30px;
}
.chat-sidebar .avatar {
	width: 30px;
	height: 30px;
	line-height: 30px;
}
.chat-sidebar .chat.chat-left {
	margin-bottom: 20px;
}
.chat-sidebar .chat.chat-left:last-child {
	margin-bottom: 0;
}
.chat-sidebar .chat-left .chat-time {
	color: #888;
	display: inline-block;
	font-size: 11px;
}
.chat-sidebar .chat-content > p {
	font-size: 13px;
	margin-bottom: 0;
}
.chat-sidebar.opened {
	margin-right: 0;
}

/*-----------------
	44. Jobs
-----------------------*/

.apply-btn {
	background: #00c5fb;
	background: -moz-linear-gradient(left, #00c5fb 0%, #0253cc 100%);
	background: -webkit-linear-gradient(left, #00c5fb 0%, #0253cc 100%);
	background: -ms-linear-gradient(left, #00c5fb 0%, #0253cc 100%);
	background: linear-gradient(to right, #00c5fb 0%, #0253cc 100%);
	border-color: transparent;
	box-shadow: 0 6px 15px rgba(36, 37, 38, 0.08);
	color: #fff;
	position: absolute;
	right: 20px;
	top: 20px;
}
.job-list {
	background-color: #fff;
	border: 1px solid #ededed;
	border-radius: 4px;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.2);
	display: block;
	margin-bottom: 35px;
	position: relative;
	transition: all 0.3s ease 0s;
}
.job-list-det {
	align-items: flex-start;
	display: flex;
	align-items: center;
	padding: 20px;
}
.job-list .job-list-desc {
	flex: 1 1 0;
}
.job-list h4.job-department {
	color: #777;
	font-size: 14px;
	margin-bottom: 0;
}
.job-list h3.job-list-title {
	color: #333;
	font-size: 18px;
	font-weight: 600;
	line-height: 18px;
}
.job-list .job-list-footer {
	background-color: #f9f9f9;
	border-radius: 0 0 4px 4px;
	position: relative;
	padding: 20px;
}
.job-list .job-list-footer ul {
	list-style: none;
	margin: 0;
	padding: 0;
}
.job-list .job-list-footer ul li {
	color: #777;
	display: inline-block;
	margin-right: 14px;
}
.job-list .job-list-footer ul li i {
	color: #777;
	margin-right: 3px;
	position: relative;
}
.job-list .job-list-footer ul li:last-child {
	margin-right: 0;
}
.page-wrapper.job-wrapper {
	margin-left: 0;
}
.job-types {
	background-color: transparent;
	border: 1px solid #00c5fb;
	color: #00c5fb;
	border-radius: 4px;
	display: inline-block;
	padding: 6px 12px;
	text-align: center;
}

/*-----------------
	45. Job Details
-----------------------*/

.job-info {
	background-color: #fff;
	border: 1px solid #efefef;
	float: left;
	margin: 0 0 30px;
	padding: 30px;
	position: relative;
	width: 100%;
}
.job-title {
	color: #585858;
	font-size: 22px;
	font-weight: 600;
	margin-bottom: 5px;
}
.job-info .job-dept {
	color: #737882;
	display: block;
	font-size: 16px;
	font-weight: 500;
	margin-bottom: 20px;
}
.job-post-det {
	display: inline-block;
	margin-bottom: 5px;
	width: 100%;
	color: #737882;
	list-style: none;
	margin: 0;
	padding: 0;
}
.job-content li {
	line-height: 28px;
}
.job-post-det li {
	float: left;
	list-style: none;
	margin-bottom: 10px;
	margin-right: 20px;
}
.job-det-info {
	background-color: #fff;
	margin: 0 0 15px;
	padding: 0 0 6px;
}
.info-list {
	color: #888;
	padding-top: 20px;
}
.info-list span {
	color: #00c5fb;
	float: left;
	font-size: 20px;
	line-height: 14px;
}
.info-list p {
	line-height: 1.7;
	margin: 0 0 0 40px;
}
.info-list > h5 {
	color: #585858;
	font-size: 14px;
	font-weight: 600;
	line-height: 14px;
	margin-bottom: 5px;
	margin-left: 40px;
	text-transform: uppercase;
}
.app-ends {
	color: #46cd38;
	font-size: 13px;
}
.job-btn {
    border: 2px solid #00c5fb;
    color: #00c5fb;
    display: block;
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 20px;
    padding: 15px;
    text-transform: uppercase;
    transition: all 0.3s ease 0s;
}
.job-btn:hover {
	background-color: #00c5fb;
	color: #fff;
}
.job-widget {
	background-color: #fff;
	border: 1px solid #efefef;
	float: left;
	margin: 0 0 30px;
	padding: 30px;
	position: relative;
	width: 100%;
}
.job-desc-title h2 {
	font-size: 20px;
	margin-bottom: 0;
}
.job-widget h4 {
	color: #585858;
	font-size: 16px;
	font-weight: 600;
	margin: 0 0 20px;
}
.job-description > p {
	color: #727272;
	line-height: 28px;
}
.square-list {
	list-style: none;
	padding: 0;
	margin-bottom: 0;
}
.square-list li {
	color: #727272;
	line-height: 24px;
	list-style: none;
	margin: 10px 0 0 20px;
	position: relative;
}
.square-list li:first-child {
	margin-top: 0
}
.square-list li:before {
	font-family: fontawesome;
	margin: 0;
	position: relative;
	color: #00c5fb;
	float: left;
	margin-left: -20px;
	display: block;
	content: "\f0c8";
	font-size: 8px
}
.text-blue {
	color: #009ce7;
}

/*-----------------
	46. Notification Settings
-----------------------*/

.notification-list .list-group-item {
	padding: 15px;
}
.notification-list .status-toggle {
	float: right;
}

/*-----------------
	47. Leave Settings
-----------------------*/

.leave-item {
	max-width: 653px;
}
.leave-row {
    display: flex;
    margin-bottom: 15px;
}
.carry-forward-itemview {
    margin-bottom: 15px;
}
.earned-leave-itemview {
    margin-bottom: 15px;
}
.leave-row .leave-left {
    flex: 1 1 auto;
}
.leave-row .leave-left .input-box {
    max-width: 410px;
}
.leave-item .form-group {
	margin-bottom: 0;
}
.leave-right {
    align-items: center;
    display: flex;
    flex: 0 0 200px;
    justify-content: end;
    margin-top: 31px;
    min-height: 44px;
    text-align: right;
}
.leave-right .btn {
    min-height: 44px;
    min-width: 75px;
}
.leave-right .btn + .btn {
	margin-left: 10px;
}
.leave-edit-btn {
    color: #216ef4;
    background-color: transparent;
    border: 0;
    padding: 0 6px;
	transition: unset;
}
.leave-edit-btn[disabled] {
    cursor: not-allowed;
    opacity: 0.65;
}
.leave-inline-form {
    align-items: center;
    display: flex;
    min-height: 44px;
}
.leave-header {
    align-items: center;
    color: #212536;
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
}
.leave-header .title {
    flex: 1 1 auto;
}
.leave-header .leave-action {
    flex: 1 1 auto;
    text-align: right;
}
.leave-table .l-name {
	width: 200px;
}
.leave-table .l-days {
	width: 140px;
}
.leave-box .subtitle {
    color: #8e8e8e;
    font-size: 14px;
    font-weight: normal;
    margin: 5px auto 0 5px;
}
.leave-duallist {
    background-color: #f9f9f9;
    border: 1px solid #e3e3e3;
    display: block;
    padding: 15px;
}
.card-title.with-switch {
    display: flex;
    justify-content: space-between;
}
.btn.leave-delete-btn {
    font-weight: 500;
    margin-left: 10px;
    min-height: 30px;
    padding: 2px 15px;
}

/*-----------------
	48. Termination
-----------------------*/

.add-group-btn {
    display: flex;
}
.add-group-btn .btn {
    align-items: center;
    display: flex;
    margin-left: 10px;
}
.add-group-btn .btn i {
	margin-right: 5px;
}
.bootstrap-datetimepicker-widget table td.active, .bootstrap-datetimepicker-widget table td.active:hover {
	background-color: #00c5fb;
	text-shadow: unset;
}

/*-----------------
	49. Loader
-----------------------*/

#loader-wrapper {
	background-color: #fff;
	bottom: 0;
	height: 100%;
	left: 0;
	position: fixed;
	right: 0;
	top: 0;
	width: 100%;
	z-index: 9999;
}
#loader {
	background-position: center center;
	background-repeat: no-repeat;
	height: 200px;
	left: 50%;
	margin: -100px 0 0 -100px;
	position: absolute;
	top: 50%;
	width: 200px;
}
.loader-ellips {
	font-size: 20px;
	position: relative;
	width: 64px;
	margin: 100px auto 0;
}
.loader-ellips__dot {
	display: block;
	width: 1em;
	height: 1em;
	border-radius: 0.5em;
	position: absolute;
	animation-duration: 0.5s;
	animation-timing-function: ease;
	animation-iteration-count: infinite;
}
.loader-ellips__dot:nth-child(1),
.loader-ellips__dot:nth-child(2) {
	left: 0;
}
.loader-ellips__dot:nth-child(3) {
	left: 1.5em;
}
.loader-ellips__dot:nth-child(4) {
	left: 3em;
}
.loader-ellips__dot:nth-child(1) {
	animation-name: reveal;
}
.loader-ellips__dot:nth-child(2),
.loader-ellips__dot:nth-child(3) {
	animation-name: slide;
}
.loader-ellips__dot:nth-child(4) {
	animation-name: reveal;
	animation-direction: reverse;
}
@keyframes reveal {
	from {
		transform: scale(0.001);
	}
	to {
		transform: scale(1);
	}
}
@keyframes slide {
	to {
		transform: translateX(1.5em)
	}
}
.loader-ellips__dot:nth-child(1) {
	background: #404040;
}
.loader-ellips__dot:nth-child(2) {
	background: #00c5fb;
}
.loader-ellips__dot:nth-child(3) {
	background: #404040;
}
.loader-ellips__dot:nth-child(4) {
	background: #404040;
}

/*-----------------
	50. Payroll Items
-----------------------*/

.page-menu .nav-tabs > li > a {
	font-size: 18px;
}
.table-radius.table {
	width: 100%;
	background: #fff;
	border-spacing: 0;
	border-radius: 0.25rem;
	margin-bottom: 0;
}
.table-radius.table thead td, .table-radius.table thead th {
    border-top: 0 none !important;
    padding: 20px !important;
}

.table-radius.table tbody td, .table-radius.table tbody th {
    padding: 15px 20px !important;
}

/*-----------------
	51. Error
-----------------------*/

.error-page {
    align-items: center;
    background-color: rgba(0, 197, 251, 0.2);
    color: #1f1f1f;
    display: flex;
}
.error-page .main-wrapper {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    width: 100%;
}
.error-box {
    margin: 0 auto;
    max-width: 480px;
    padding: 40px 0;
    text-align: center;
    width: 100%;
}
.error-box h1 {
    color: #00c5fb;
    font-size: 10em;
}
.error-box p {
    margin-bottom: 30px;
}
.error-box .btn {
    border-radius: 50px;
    font-size: 18px;
    font-weight: 600;
    min-width: 200px;
    padding: 10px 20px;
}

/*-----------------
	52. Lock Screen
-----------------------*/

.lock-user {
    margin-bottom: 20px;
    text-align: center;
}
.lock-user img {
    margin-bottom: 15px;
    width: 100px;
}

/*-----------------
	53. OTP
-----------------------*/

.otp-wrap {
    margin-bottom: 30px;
    text-align: center;
}
.otp-input {
    background-color: #fff;
    border: 1px solid #e3e3e3;
    border-radius: 4px;
    display: inline-block;
    font-size: 24px;
    font-weight: 500;
    height: 70px;
    line-height: 29px;
    margin-right: 15px;
    text-align: center;
    width: 70px;
}
.otp-input:last-child {
	margin-right: 0;
}

/*-----------------
	54. Salary Settings
-----------------------*/

.settings-widget + .settings-widget {
    margin-top: 30px;
}
.row.row-sm {
    margin-left: -3px;
    margin-right: -3px;
}
.row.row-sm > div {
    padding-left: 3px;
    padding-right: 3px;
}
.set-btn {
    min-height: 44px;
}

/*-----------------
	55. Components
-----------------------*/

.comp-buttons .btn {
	margin-bottom: 5px;
}
.comp-dropdowns .btn-group {
	margin-bottom: 5px;
}
.progress-example .progress {
	margin-bottom: 1.5rem;
}
.progress-xs {
	height: 4px;
}
.progress-sm {
	height: 15px;
}
.progress.progress-sm {
	height: 6px;
}
.progress.progress-md {
	height: 8px;
}
.progress.progress-lg {
	height: 18px;
}
.stickyside .sidebar-menu > ul > li > a.active {
	color: #00c5fb;
}
.comp-section {
    margin-bottom: 30px;
    padding-bottom: 30px;
    padding-top: 30px;
}
.comp-section .section-title {
    font-size: 1.125rem;
    margin-bottom: 20px;
    text-decoration: underline;
    text-transform: uppercase;
}
.card > .card-body > .tab-content {
	padding-top: 0;
}

/*-----------------
	56. Search
-----------------------*/

.main-search {
	margin-bottom: 20px;
}
.search-result {
	margin-bottom: 30px;
}
.search-result u {
	color: #00b7ed;
}
.search-result p {
	color: #777;
	margin-bottom: 0;
}
.search-lists .nav-tabs.nav-tabs-solid {
	background-color: #fff;
	border: 1px solid #e3e3e3;
}
.top-nav-search form {
    margin-top: 10px;
	position: relative;
    width: 230px;
}
.top-nav-search .form-control {
    background-color: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.15);
    border-radius: 50px;
    color: #fff;
    height: 40px;
    padding: 10px 50px 10px 15px;
}
.top-nav-search .btn {
    background-color: transparent;
    border-color: transparent;
    color: rgba(255, 255, 255, 0.7);
    min-height: 40px;
    padding: 7px 15px;
    position: absolute;
    right: 0;
    top: 0;
}
.top-nav-search .form-control::-webkit-input-placeholder {
	color: rgba(255, 255, 255, 0.7);
}
.top-nav-search .form-control::-moz-placeholder {
	color: rgba(255, 255, 255, 0.7);
}
.top-nav-search .form-control:-ms-input-placeholder {
	color: rgba(255, 255, 255, 0.7);
}
.top-nav-search .form-control::-ms-input-placeholder {
	color: rgba(255, 255, 255, 0.7);
}
.top-nav-search .form-control::placeholder {
	color: rgba(255, 255, 255, 0.7);
}
.responsive-search {
    display: none;
	color: #333;
    font-size: 20px;
    height: 60px;
    line-height: 60px;
    padding: 0 15px;
}
.top-nav-search.active form {
    display: block;
    left: 0;
    position: absolute;
}

/*-----------------
	57. Knowledgebase
-----------------------*/

.topics {
    background-color: #fff;
    border: 1px solid #ededed;
    border-radius: 4px;
    box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.2);
    margin-bottom: 30px;
    padding: 20px;
}
.topics .topic-title {
    color: #333;
    margin-bottom: 20px;
    padding: 0 25px 0 0;
    position: relative;
}
.topics .topic-title a {
    color: #333;
    font-size: 20px;
    font-weight: 500;
    text-decoration: none;
}
.topics .topic-title a:hover {
    color: #00b7ed;
}
.topics .topic-title a span {
    background-color: #00b7ed;
    border-radius: 16px;
    color: #fff;
    display: inline-block;
    font-size: 10px;
    height: 20px;
    line-height: 20px;
    text-align: center;
    width: 20px;
}
.topics .topic-title a i {
    color: #00b7ed;
	font-size: 24px;
    margin-right: 15px;
}
.topics .topics-list {
    padding: 0;
    margin: 0;
}
.topics .topics-list li {
	list-style: none;
	line-height: 2;
}
.topics .topics-list li a {
	padding-left: 25px;
	color: #555;
	font-size: 14px;
	font-weight: 400;
	text-decoration: none;
	outline: 0 none;
}
.topics .topics-list li a:hover {
	color: #00b7ed;
}
.topics .topics-list li:before {
	font-family: FontAwesome;
	content: "\f016";
	color: #555;
	font-size: 15px;
	left: 0;
	position: absolute;
	top: 0;
}
.topics .topics-list li {
	position: relative;
}
.widget {
    background-color: #fff;
    border: 1px solid #ededed;
    border-radius: 4px;
    box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.2);
    margin-bottom: 30px;
    padding: 20px;
}
.widget:last-child {
    margin-bottom: 0;
}
.widget h4 {
    color: #333;
    font-size: 18px;
    font-weight: 500;
    line-height: 25px;
}
.widget > ul {
    margin-bottom: 0;
    padding: 0;
    margin: 0;
}
.widget-category li {
    line-height: 35px;
    list-style: none;
    position: relative;
}
.widget-category li:before {
	font-family: FontAwesome;
	content: "\f016";
	color: #555;
	font-size: 18px;
	left: 0;
	position: absolute;
	top: 0;
}
.widget-category li a {
    color: #5e6977;
    padding-left: 25px;
}
.widget-category li a:hover {
    color: #00b7ed;
}
.post {
    margin-bottom: 50px;
}
.post .meta {
    background-color: #f9f9f9;
    border: 1px solid #efefef;
    font-size: 12px;
    margin: 0 0 20px;
    padding: 10px;
}
.post .meta p {
    padding: 15px 0;
}
.post .meta li {
    display: inline-block;
    color: #86939e;
}
.post .meta li span {
	color: #43484d;
}
.post .meta li:after {
    content: "/";
    padding: 0 10px;
}
.post .meta li:last-child:after {
    content: none;
}
.post img {
	padding: 40px 0;
	max-width: 100%;
}
.feedback {
    background-color: #f9f9f9;
    border: 1px solid #efefef;
    padding: 20px;
    margin-bottom: 50px;
}
.feedback h3 {
    color: #333;
    font-size: 24px;
    margin-bottom: 20px;
}
.feedback p:last-child {
    margin-bottom: 0;
}
.post .meta a {
    color: #00b7ed;
}
.widget .widget-title i {
    color: #00b7ed;
    font-size: 24px;
    margin-right: 15px;
}
.post h1.post-title {
    font-size: 32px;
    font-weight: 400;
    margin-bottom: 20px;
}
.post h2 {
    font-size: 24px;
    font-weight: 400;
}
.post > p {
    margin-bottom: 20px;
}
.comment-section {
    float: left;
    width: 100%;
}
.comment-section h3 {
    font-size: 24px;
    font-weight: 400;
    margin-bottom: 30px;
}
ul.comment-list {
    border-top: 0;
    float: left;
    list-style: none;
    margin: 0;
    padding: 0;
    width: 100%;
}
ul.comment-list li {
    border: 0;
    box-sizing: border-box;
    clear: both;
    float: left;
    list-style: outside none none;
    margin: 0 0 30px;
    padding: 0 0 0 70px;
    position: relative;
    width: 100%;
}
ul.comment-list li:last-child {
    margin-bottom: 0;
}
ul.comment-list li div.comment {
    border-bottom: 1px solid #ccc;
    margin-bottom: 20px;
    padding-bottom: 20px;
}
ul.comment-list li .comment-author {
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
}
ul.comment-list li .comment-author img {
    border-radius: 50px;
    float: left;
    height: 50px;
    margin: 0;
    max-height: 50px;
    max-width: 50px;
    width: 50px;
}
ul.comment-list li .comment-details {
    margin: 10px 0;
    padding: 0 0 10px;
    position: relative;
}
ul.comment-list li .author-name > a {
    color: #2f363f;
    font-size: 18px;
    font-weight: 500;
    line-height: 19px;
    text-transform: capitalize;
}
ul.comment-list li .author-name span {
    float: left;
    font-size: 14px;
    width: 100%;
}
ul.comment-list li .comment-body {
    float: left;
    margin: 10px 0 0;
    width: 100%;
}
ul.comment-list li .comment-body p {
    line-height: 28px;
}
ul.comment-list li .reply a {
    clear: both;
    color: #2f363f;
    display: inline-block;
    font-size: 15px;
    font-weight: 500;
    margin: 10px 0 0;
}
ul.comment-list li ul.children {
    border: 0 none;
    clear: both;
    float: left;
    margin: 10px 0;
    padding: 0;
    width: 100%;
}
.comment-section .comment-reply {
    float: left;
    margin-top: 30px;
    width: 100%;
}
.comment-reply form {
    float: left;
    margin-bottom: 20px;
    width: 100%;
}
.comment-reply .form-control {
    background-color: #f9f9f9;
    border: 1px solid #e7e7e7;
    border-radius: 0;
    min-height: 50px;
}
.comment-reply .form-control:focus {
	box-shadow: unset;
}

/*-----------------
	58. FAQ
-----------------------*/

.faq-card .card-header {
    background-color: #fff;
    padding: 20px;
    position: relative;
}
.faq-card .card {
    border-color: #ddd;
    border-radius: 3px;
    box-shadow: none;
	margin-bottom: 20px;
    overflow: hidden;
}
.faq-card .card .card-header h4 {
	margin-bottom: 0;
}
.faq-card .card .card-header h4 > a {
    color: #090909;
    display: block;
    font-size: 20px;
    font-weight: 400;
    padding-right: 60px;
    position: relative;
}
.faq-card .card .card-header h4 > a:after {
	font-family: FontAwesome;
	font-size: 19px;
	position: absolute;
	right: 0px;
	font-weight: 400;
}
.faq-card .card .card-header h4 > a.collapsed:after {
	content: "\f067"; }
.faq-card .card .card-header h4 > a:not(.collapsed):after {
	content: "\f068";
}
.faq-card .card .card-header h4 > label {
    color: #fff;
    cursor: pointer;
    display: flex;
    font-size: 24px;
    font-weight: 400;
    margin: 0;
    padding-right: 60px;
    position: relative;
}
.faq-card .card .card-header h4 > label:after {
	font-family: FontAwesome;
	font-size: 19px;
	position: absolute;
	right: 0px;
	font-weight: 400;
	top: 0;
}
.faq-card .card .card-header h4 > label.collapsed:after {
	content: "\f067"; }
.faq-card .card .card-header h4 > label:not(.collapsed):after {
	content: "\f068";
}
.small-container {
    margin: auto;
    max-width: 1100px;
    padding: 30px;
}
.inner-header {
    margin-bottom: 30px;
}

/*-----------------
	59. Employee Dashboard
-----------------------*/

.welcome-box {
    border-radius: 0;
    box-shadow: unset;
    display: flex;
    margin: -30px -30px 30px;
}
.welcome-img {
	margin-right: 15px;
}
.welcome-img img {
    border-radius: 8px;
    width: 60px;
}
.welcome-det p {
    color: #777;
	font-size: 18px;
    margin-bottom: 0;
}
.dash-section {
    margin-bottom: 30px;
}
.dash-list {
	background-color: white;
    border-color: #f1f6f8;
    color: #2e424d;
    display: flex;
    margin: 10px 0 0;
}
.dash-card-container {
    display: flex;
    flex-direction: row;
    flex-grow: 1;
}
.dash-card-icon {
    align-items: center;
    display: flex;
    flex-direction: row;
    font-size: 26px;
    padding-right: 15px;
}
.dash-card-icon i {
    width: 30px;
}
.dash-card-content {
    align-items: center;
    display: flex;
    flex-direction: row;
}
.e-avatar {
    background-color: #fff;
    border: 3px solid #e7e7e7;
    border-radius: 50%;
    height: 45px;
    position: relative;
    width: 45px;
    margin-left: -20px;
}
.e-avatar:first-of-type {
    margin-left: 0 !important;
}
.dash-card-avatars {
    align-items: center;
    display: flex;
    flex-grow: 1;
    justify-content: flex-end;
    padding: 0 15px;
}
.e-avatar > img {
    border-radius: 50%;
    width: 100%;
}
.dash-sec-title {
	font-size: 18px;
	font-weight: 700;
	margin-bottom: 20px;
	text-transform: uppercase;
}
.dash-info-list .dash-card {
    background-color: #fff;
    border: 1px solid #eaeaea;
    border-radius: 8px;
    color: #575757;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
    height: auto;
    padding: 15px;
}
.dash-card-content p {
	font-size: 22px;
	margin-bottom: 0;
}
.dash-sec-content .dash-info-list + .dash-info-list {
	margin-top: 15px;
}
.dash-sidebar h5 {
    color: inherit;
    font-size: 13px;
    font-weight: 700;
    line-height: 1.5;
    margin-bottom: 15px;
    text-transform: uppercase;
}
.dash-sidebar p {
    color: #777;
    font-size: 13px;
    font-weight: 600;
    line-height: 1.5;
    margin-bottom: 0;
    text-transform: uppercase;
}
.dash-sidebar .card {
	border-radius: 8px;
	box-shadow: unset;
}
.time-list {
    display: flex;
    flex-grow: 1;
    margin-bottom: 20px;
}
.request-btn {
    text-align: center;
}
.dash-stats-list {
    align-items: center;
    display: flex;
    flex-flow: column wrap;
    flex-grow: 1;
    padding-left: 15px;
    padding-right: 15px;
}
.dash-stats-list + .dash-stats-list {
	border-left: 1px solid #e7e7e7;
}
.dash-stats-list h4 {
    color: #1f1f1f;
    font-size: 21px;
    font-weight: 700;
    line-height: 1.5;
    margin-bottom: 0;
}

/*-----------------
	60. Performance Review
-----------------------*/

.review-table tr {
    background-color: #fff;
}
.review-section {
	margin-bottom: 30px;
}
.review-header {
    background-color: #fff;
    border: 1px solid #dee2e6;
    margin-bottom: 0;
    padding: 15px;
    text-align: center;
}
.review-header h3 {
    font-size: 1.4rem;
    margin-bottom: 3px;
}
.review-header p {
	margin-bottom: 0;
}
.review-table .form-control {
	height: 36px;
}
.grade-span .badge {
    border-radius: 3px;
    display: inline-block;
    font-size: 13px;
    min-width: 75px;
    padding: 4px 12px;
    text-align: center;
}
.review-table .select2-container .select2-selection--single {
	height: 36px;
}
.review-table .select2-container--default .select2-selection--single .select2-selection__rendered {
	line-height: 34px;
}
.review-table .select2-container--default .select2-selection--single .select2-selection__arrow {
	height: 34px;
}

/*-----------------
	61. Responsive
-----------------------*/

@media only screen and (min-width: 991px) {
	#toggle_btn {
		color: #999;
		float: left;
		font-size: 26px;
		line-height: 60px;
		padding: 0 10px;
	}
	.mini-sidebar .header-left .logo img {
		height: auto;
		max-height: 30px;
		width: auto;
	}
	.mini-sidebar .header .header-left {
		padding: 0 5px;
		width: 60px;
	}
	.mini-sidebar .sidebar {
		width: 60px;
	}
	.mini-sidebar.expand-menu .sidebar {
		width: 230px;
	}
	.mini-sidebar .menu-title {
		visibility: hidden;
		white-space: nowrap;
	}
	.mini-sidebar.expand-menu .menu-title {
		visibility: visible;
	}
	.mini-sidebar .menu-title a {
		visibility: hidden;
	}
	.mini-sidebar.expand-menu .menu-title a {
		visibility: visible;
	}
	.mini-sidebar .sidebar .noti-dot:before {
		display: none;
	}
	.mini-sidebar .sidebar .noti-dot:after {
		display: none;
	}
	.mini-sidebar.expand-menu .sidebar .noti-dot:before {
		display: block;
	}
	.mini-sidebar.expand-menu .sidebar .noti-dot:after {
		display: block;
	}
	.modal-open.mini-sidebar .sidebar {
		z-index: 1051;
	}
	.mini-sidebar .sidebar .sidebar-menu ul > li > a span {
		display: none;
		transition: all 0.2s ease-in-out;
		opacity: 0;
	}
	.mini-sidebar .sidebar .sidebar-menu ul > li > a span.chat-avatar-sm {
		display: inline-block;
		opacity: 1;
	}
	.mini-sidebar .sidebar .sidebar-menu ul > li > a span.status {
		display: inline-block;
		opacity: 1;
	}
	.mini-sidebar.expand-menu .sidebar .sidebar-menu ul > li > a span {
		display: inline;
		opacity: 1;
	}
	.mini-sidebar .sidebar .sidebar-menu > ul > li > a i {
		font-size: 30px;
		width: 30px;
	}
	.mini-sidebar.expand-menu .sidebar .sidebar-menu > ul > li > a i {
		font-size: 24px;
		width: 20px;
	}
	.mini-sidebar .page-wrapper {
		margin-left: 60px;
	}
}
@media only screen and (min-width: 768px) {
	.modal-md {
		width: 600px;
	}
	.nav-tabs.nav-justified.nav-tabs-top {
		border-bottom: 1px solid #ddd;
	}
	.nav-tabs.nav-justified.nav-tabs-top > li > a,
	.nav-tabs.nav-justified.nav-tabs-top > li > a:hover,
	.nav-tabs.nav-justified.nav-tabs-top > li > a:focus {
		border-width: 2px 0 0 0;
	}
	.nav-tabs.nav-tabs-top > li {
		margin-bottom: 0;
	}
	.nav-tabs.nav-tabs-top > li > a,
	.nav-tabs.nav-tabs-top > li > a:hover,
	.nav-tabs.nav-tabs-top > li > a:focus {
		border-width: 2px 0 0 0;
	}
	.nav-tabs.nav-tabs-top > li.open > a,
	.nav-tabs.nav-tabs-top > li > a:hover,
	.nav-tabs.nav-tabs-top > li > a:focus {
		border-top-color: #ddd;
	}
	.nav-tabs.nav-tabs-top > li+li > a {
		margin-left: 1px;
	}
	.nav-tabs.nav-tabs-top > li > a.active,
	.nav-tabs.nav-tabs-top > li > a.active:hover,
	.nav-tabs.nav-tabs-top > li > a.active:focus {
		border-top-color: #00c5fb;
	}
	.nav-tabs.nav-tabs-bottom > li {
		margin-bottom: -1px;
	}
	.nav-tabs.nav-tabs-bottom > li > a.active,
	.nav-tabs.nav-tabs-bottom > li > a.active:hover,
	.nav-tabs.nav-tabs-bottom > li > a.active:focus {
		border-bottom-width: 2px;
		border-color: transparent;
		border-bottom-color: #00c5fb;
		background-color: transparent;
		transition: none 0s ease 0s;
		-moz-transition: none 0s ease 0s;
		-o-transition: none 0s ease 0s;
		-ms-transition: none 0s ease 0s;
		-webkit-transition: none 0s ease 0s;
	}
	.nav-tabs.nav-tabs-solid {
		background-color: #fafafa;
		border: 0;
	}
	.nav-tabs.nav-tabs-solid > li {
		margin-bottom: 0;
	}
	.nav-tabs.nav-tabs-solid > li > a {
		border-color: transparent;
	}
	.nav-tabs.nav-tabs-solid > li > a:hover,
	.nav-tabs.nav-tabs-solid > li > a:focus {
		background-color: #f5f5f5;
	}
	.nav-tabs.nav-tabs-solid > .open:not(.active) > a {
		background-color: #f5f5f5;
		border-color: transparent;
	}
	.nav-tabs-justified.nav-tabs-top {
		border-bottom: 1px solid #ddd;
	}
	.nav-tabs-justified.nav-tabs-top > li > a,
	.nav-tabs-justified.nav-tabs-top > li > a:hover,
	.nav-tabs-justified.nav-tabs-top > li > a:focus {
		border-width: 2px 0 0 0;
	}
}
@media only screen and (max-width: 1199.98px) {
	.page-title-box {
		display: none;
	}
}
@media only screen and (max-width: 991.98px) {
	.profile-rightbar {
		display: inline-block !important;
	}
	.profile-info-left {
		border-right: none;
		border-bottom: 2px dashed #ccc;
		margin-bottom: 20px;
		padding-bottom: 20px;
	}
	.task-right-sidebar .task-chat-view {
		display: block;
		position: fixed;
		right: 0;
		-webkit-transition: all 0.4s ease;
		-moz-transition: all 0.4s ease;
		transition: all 0.4s ease;
		margin-right: 0;
	}
	.task-chat-view {
		display: none;
		-webkit-transition: all 0.4s ease;
		-moz-transition: all 0.4s ease;
		transition: all 0.4s ease;
		right: 0;
		transform: translateX(0px);
		z-index: 1041;
		width: 300px;
		position: fixed;
		transition: all 0.4s ease 0s;
		margin-right: -300px;
		display: table-cell;
		top: 0;
		padding-bottom: 60px;
		margin-top: 60px;
	}
	.chat-profile-view {
		display: none;
		-webkit-transition: all 0.4s ease;
		-moz-transition: all 0.4s ease;
		transition: all 0.4s ease;
		right: 0;
		transform: translateX(0px);
		z-index: 1041;
		width: 300px;
		position: fixed;
		transition: all 0.4s ease 0s;
		margin-right: -300px;
		display: table-cell;
		top: 0;
		padding-bottom: 60px;
		margin-top: 60px;
	}
	.message-view.task-view {
		width: 100%;
	}
	.float-left.ticket-view-details {
		width: 90%;
	}
	.chat-main-row {
		left: 0;
	}
	.header .header-left {
		position: absolute;
		width: 100%;
	}
	.mobile_btn {
		display: block;
	}
	.page-title-box {
		display: none;
	}
	.sidebar {
		margin-left: -225px;
		width: 225px;
		-webkit-transition: all 0.4s ease;
		-moz-transition: all 0.4s ease;
		transition: all 0.4s ease;
		z-index: 1041;
	}
	.page-wrapper {
		margin-left: 0;
		padding-left: 0;
		padding-right: 0;
	}
	a.mobile_btn {
		color: #fff;
		font-size: 24px;
		height: 60px;
		left: 0;
		line-height: 60px;
		padding: 0 20px;
		position: absolute;
		top: 0;
		width: 60px;
		z-index: 10;
	}
	#toggle_btn {
		display: none;
	}
	.page-wrapper {
		-webkit-transition: all 0.4s ease;
		-moz-transition: all 0.4s ease;
		transition: all 0.4s ease;
	}
	.responsive-search {
		display: inline-block;
	}
	.top-nav-search form {
		display: none;
	}
	.header .has-arrow .dropdown-toggle > span:nth-child(2) {
		display: none;
	}
	.header .has-arrow .dropdown-toggle::after {
		display: none;
	}
}
@media only screen and (max-width: 767.98px) {
	.user-menu.nav > li > a {
		padding: 0 10px;
	}
	.top-nav-search form {
		width: 210px;
	}
	.profile-info-left {
		border-right: none;
		border-bottom: 2px dashed #ccc;
		margin-bottom: 20px;
		padding-bottom: 20px;
	}
	.navbar-nav .open .dropdown-menu {
		float: left;
		position: absolute;
	}
	.notifications {
		right: -48px;
	}
	.notifications::before,
	.notifications::after {
		right: 60px;
	}
	.header {
		z-index: 1040;
	}
	.task-wrapper #task-list li .task-container .task-label {
		padding-right: 50px;
		word-break: unset;
	}
	.task-btn-right {
		position: absolute;
		right: 8px;
	}
	.task-wrapper #task-list li .task-container {
		padding: 8px 10px;
	}
	.task-action-btn.task-check {
		width: 36px;
	}
	.roles-menu {
		margin-bottom: 20px;
	}
	.contacts-list {
		padding: 0 70px 0 15px;
	}
	.left-action {
		text-align: center;
		margin-bottom: 15px;
	}
	.right-action {
		text-align: center;
	}
	.top-action-left .float-left {
		float: none !important;
	}
	.top-action-left .btn-group {
		margin-bottom: 15px;
	}
	.top-action-right {
		text-align: center;
	}
	.top-action-right a.btn.btn-white {
		margin-bottom: 15px;
	}
	.mail-sent-time {
		float: left;
		margin-top: 10px;
		width: 100%;
	}
	.nav-tabs.nav-justified {
		border-bottom: 1px solid #ddd;
	}
	.nav-tabs.nav-justified > li > a.active,
	.nav-tabs.nav-justified > li > a.active:hover,
	.nav-tabs.nav-justified > li > a.active:focus {
		border-color: transparent transparent transparent #00c5fb;
		border-left-width: 2px;
	}
	.nav-tabs {
		border-bottom: 0;
		position: relative;
		background-color: #fff;
		padding: 5px 0;
		border: 1px solid #ddd;
		border-radius: 3px;
	}
	.nav-tabs .nav-item {
		margin-bottom: 0;
	}
	.nav-tabs > li > a {
		border-width: 2px;
		border-left-color: transparent;
	}
	.nav-tabs .nav-link {
		border-width: 2px;
	}
	.nav-tabs> li > a:hover,
	.nav-tabs> li > a:focus {
		background-color: #fafafa;
	}
	.nav-tabs .nav-item.show .nav-link,
	.nav-tabs .nav-link.active,
	.nav-tabs> li > a.active,
	.nav-tabs> li > a.active:hover,
	.nav-tabs> li > a.active:focus {
		background-color: #f5f5f5;
		border-color: transparent transparent transparent #00c5fb;
		border-left-width: 2px;
	}
	.nav-tabs > li.open:not(.active) > a,
	.nav-tabs > li.open:not(.active) > a:hover,
	.nav-tabs > li.open:not(.active) > a:focus {
		background-color: #fafafa;
	}
	.nav-tabs.nav-tabs-solid {
		padding: 5px;
	}
	.nav-tabs.nav-tabs-solid.nav-tabs-rounded {
		border-radius: 5px;
	}
	.nav-tabs.nav-tabs-solid > li > a {
		border-left-width: 0!important;
	}
	.nav-tabs-justified {
		border-bottom: 1px solid #ddd;
	}
	.nav-tabs-justified > li > a.active,
	.nav-tabs-justified > li > a.active:hover,
	.nav-tabs-justified > li > a.active:focus {
		border-width: 0 0 0 2px;
		border-left-color: #00c5fb;
	}
	.my-video ul li {
		width: 80px;
	}
	.voice-call-avatar .call-avatar {
		width: 120px;
		height: 120px;
	}
	.product-info {
		margin: 20px 0 30px;
	}
	.profile-bg {
		height: 280px;
	}
	.flag-nav > a > span {
		display: none;
	}
}
@media only screen and (max-width: 575.98px) {
	.contact-cat {
		padding-right: 70px;
	}
	.user-menu {
		display: none;
	}
	.mobile-user-menu {
		display: block;
	}
	.search-box {
		display: none;
	}
	.filter-row {
		margin-bottom: 15px;
	}
	.page-wrapper > .content {
		padding: 15px;
	}
	.profile-view .profile-basic {
		margin-left: 0;
		padding-right: 0;
	}
	.profile-img-wrap {
		position: relative;
		margin: 0 auto;
	}
	.profile-info-left {
		text-align: center;
	}
	.profile-basic {
		margin-left: 0;
		margin-top: 15px;
	}
	.page-title {
		font-size: 18px;
	}
	.fc-toolbar .fc-right {
		display: inline-block;
		float: none;
		margin: 10px auto 0;
		width: 200px;
		clear: both;
	}
	.fc-toolbar .fc-left {
		float: none;
		margin: 0 auto;
		width: 200px;
	}
	.upload-text {
		font-size: 18px;
	}
	.call-duration {
		display: block;
		margin-top: 0;
		margin-bottom: 10px;
		position: inherit;
	}
	.end-call {
		margin-top: 10px;
		position: inherit;
	}
	.chat-panel .chats {
		padding: 15px 0;
	}
	.chat-right .chat-content {
		max-width: 90%;
	}
	.chat-right .chat-body {
		padding-left: 0;
		padding-right: 0;
	}
	.chat-left .chat-content {
		max-width: 90%;
	}
	.chat-left .chat-body {
		padding-left: 0;
		padding-right: 0;
	}
	.chat-avatar .avatar {
		height: 20px;
		line-height: 20px;
		width: 20px;
	}
	.account-box {
		width: 100%;
		margin-bottom: 20px;
	}
	.float-left.ticket-view-details {
		width: 80%;
	}
	.custom-menu > li > a {
		margin-left: 10px;
	}
	.contact-alphapets {
		top: 113px;
	}
	.account-page .main-wrapper {
		flex-direction: column;
	}
	.otp-input {
		font-size: 18px;
		height: 50px;
		margin-right: 10px;
		width: 52px;
	}
	.account-wrapper {
		padding: 15px;
	}
	.leave-right {
		flex: 0 0 auto;
	}
	.pagination-lg .page-link {
		font-size: 1.2rem;
		padding: 0.5rem 0.85rem;
	}
	.call-box .call-avatar {
		height: 100px;
		max-width: 100px;
		min-width: 100px;
	}
	.call-box .call-wrapper .call-items .call-item {
		padding: 10px;
	}
	.call-box .call-wrapper .call-items .call-item.call-end {
		margin: 30px 5px 0;
		padding: 10px;
	}
	.submit-section .submit-btn {
		margin: 0 0 10px !important;
	}
	.leave-row {
		display: block;
	}
	.leave-box .subtitle {
		display: none;
	}
	.leave-right {
		margin-top: 20px;
	}
	.leave-inline-form {
		display: block;
	}
}

.status-widget-icon {
    background-color: rgba(0, 197, 251, 0.2);
    border-radius: 100%;
    color: #00c5fb;
    display: inline-block;
    font-size: 60px;
    height: 120px;
    line-height: 120px;
    margin-right: 10px;
    text-align: center;
    width: 120px;
}
