


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Masum Billah's - Mental Health Survey Report </title>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">
</head>

<body>



@php

$adminData = App\Models\admin::find(1);


  $data = App\Models\questiondata::find($id);


 $v1 = $data->q1;
 $v2 = $data->q2;
 $v3 = $data->q3;
 $v4 = $data->q4;
 $v5 = $data->q5;
 $v6 = $data->q6;
 $v7 = $data->q7;
 $v8 = $data->q8;
 $v9 = $data->q9;
 $v10 = $data->q10;
 $v11 = $data->q11;
 $v12 = $data->q12;
 $v13 = $data->q13;
 $v14 = $data->q14;
 $v15 = $data->q15;
 $v16 = $data->q16;
 $v17 = $data->q17;
 $v18 = $data->q18;
 $v19 = $data->q19;
 $v20 = $data->q20;
 $v21 = $data->q21;
 $v22 = $data->q22;
 $v23 = $data->q23;
 $v24 = $data->q24;
 $v25 = $data->q25;
 $v26 = $data->q26;
 $v27 = $data->q27;
 $v28 = $data->q28;
 $v29 = $data->q29;
 $v30 = $data->q30;
 $v31 = $data->q31;
 $v32 = $data->q32;
 $v33 = $data->q33;
 $v34 = $data->q34;
 $v35 = $data->q35;
 $v36 = $data->q36;
 $v37 = $data->q37;
 $v38 = $data->q38;
 $v39 = $data->q39;
 $v40 = $data->q40;
 $v41 = $data->q41;
 $v42 = $data->q42;
 $v43 = $data->q43;
 $v44 = $data->q44;


$total = $v1+$v2+$v3+$v4+$v5+$v6+$v7+$v8+$v9+$v10+$v11+$v12+$v13+$v14+$v15+$v16+$v17+$v18+$v19+$v20
+$v21+$v22+$v23+$v24+$v25+$v26+$v27+$v28+$v29+$v30+
$v31+$v32+$v33+$v34+$v35+$v36+$v37+$v38+$v39+$v40+$v41+$v42+$v43+$v44;

$PanicDisorder = $v1+$v2+$v6+$v9+$v11+$v12+$v15+$v17+$v18+$v19+$v22+$v25+$v28+$v32+$v36+$v38+$v40;

$Generalized =$v5+$v7+$v8+$v14+$v21+$v23+$v24+$v29+$v31+$v35+$v37+$v39+$v44;

$Separation = $v4+$v13+$v16+$v20+$v26+$v30+$v33;

$SocialPhobis= $v3+$v10+$v27+$v34+$v41+$v42+$v43;


@endphp


    <style>
        * {
            font-family: 'Lato', sans-serif;
            line-height: 26px;
            font-size: 15px;
        }

        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        /*=========================================================
          [ Table ]
        =========================================================*/

        .custom--table {
            width: 100%;
            color: inherit;
            vertical-align: top;
            font-weight: 400;
            border-collapse: collapse;
            border-bottom: 2px solid #ddd;
            margin-top: 0;
        }
        .table-title{
            font-size: 24px;
            font-weight: 600;
            line-height: 32px;
            margin-bottom: 10px;
        }
        .custom--table thead {
            font-weight: 700;
            background: inherit;
            color: inherit;
            font-size: 16px;
            font-weight: 500;
        }

        .custom--table tbody {
            border-top: 0;
            overflow: hidden;
            border-radius: 10px;
        }
        .custom--table thead tr {
            border-top: 2px solid #ddd;
            border-bottom: 2px solid #ddd;
            text-align: left;
        }
        .custom--table thead tr th {
            border-top: 2px solid #ddd;
            border-bottom: 2px solid #ddd;
            text-align: left;
            font-size: 16px;
            padding: 10px 0;
        }
        .custom--table tbody tr {
            vertical-align: top;
        }
        .custom--table tbody tr td {
            font-size: 14px;
            line-height: 18px
            vertical-align: top;
        }
        .custom--table tbody tr td:last-child{
            padding-bottom: 10px;
        }
        .custom--table tbody tr td .data-span {
            font-size: 14px;
            font-weight: 500;
            line-height: 18px;
        }
        .custom--table tbody .table_footer_row {
            border-top: 2px solid #ddd;
            margin-bottom: 10px !important;
            padding-bottom: 10px !important;

        }

        /* invoice area */

        .item-description h2 {
            color: rgba(0,0,0, 0.5);
            font-style: italic;
        }

        .invoice-area {
            padding: 10px 0;
        }

        .invoice-wrapper {
            max-width: 650px;
            margin: 0 auto;
            box-shadow: 0 0 10px #f3f3f3;
            padding: 40px;
        }

        .report-header {
            margin-bottom: 40px;
        }

        .report-flex-contents {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            gap: 24px;
            flex-wrap: wrap;
        }

        .report-logo {}

        .report-logo img {
            border-radius: 50%;
            width: 150px;
        }

        .report-header-contents h4{
            font-size: 14px;
            color: rgba(0,0,0, 0.8);
        }

        .report-header-contents {
            display: flex;
            justify-content: space-between;
            border-bottom: 3px solid #FDD700;
        }

        .invoice-details {
            margin-top: 20px;
        }

        .invoice-details-flex {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 24px;
            flex-wrap: wrap;
        }

        .invoice-details-title {
            font-size: 24px;
            font-weight: 700;
            line-height: 32px;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .invoice-single-details {}

        .details-list {
            margin: 0;
            padding: 0;
            list-style: none;
            margin-top: 10px;
        }

        .details-list .list {
            font-size: 14px;
            font-weight: 400;
            line-height: 18px;
            color: #666;
            margin: 0;
            padding: 0;
            transition: all .3s;
        }
        .details-list .list strong {
            font-size: 14px;
            font-weight: 500;
            line-height: 18px;
            color: #666;
            margin: 0;
            padding: 0;
            transition: all .3s;
        }

        .details-list .list a {
            display: inline-block;
            color: #666;
            transition: all .3s;
            text-decoration: none;
            margin: 0;
            line-height: 18px
        }

        .item-description {
            margin-top: 10px;
        }

        .products-item {
            text-align: left;
        }

        .invoice-total-count {}

        .invoice-total-count .list-single {
            display: flex;
            align-items: center;
            gap: 30px;
            font-size: 16px;
            line-height: 28px;
        }

        .invoice-total-count .list-single strong {}

        .invoice-subtotal {
            border-bottom: 2px solid #ddd;
            padding-bottom: 15px;
        }

        .invoice-total {
            padding-top: 10px;
        }

        .terms-condition-content {
            margin-top: 30px;
        }

        .terms-flex-contents {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            flex-wrap: wrap;
        }

        .terms-left-contents {
            flex-basis: 50%;
        }

        .terms-title {
            font-size: 18px;
            font-weight: 700;
            color: #333;
            margin: 0;
        }

        .terms-para {
            margin-top: 10px;
        }

        .invoice-footer {}

        .invoice-flex-footer {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 30px;
        }

        .single-footer-item {
            flex: 1;
        }

        .single-footer {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .single-footer .icon {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 30px;
            width: 30px;
            font-size: 16px;
            background-color: #000e8f;
            color: #fff;
        }

        .icon-details {
            flex: 1;
        }

        .icon-details .list {
            display: block;
            text-decoration: none;
            color: #666;
            transition: all .3s;
            line-height: 24px;
        }
    </style>

    <!-- Invoice area Starts -->

    {{ $adminData->admin_photos }}
    <div class="invoice-area">
        <div class="invoice-wrapper">
            <div class="report-header">

                <table style="width: 100%; border-bottom: 2px solid #FDD700;">

                    <tr>
                       <th colspan="4">
                            <div class="invoice-logo">
                                
                                <img src="{{ (!empty($adminData->admin_photos))? url('upload/admin_images/'.$adminData->admin_photos):url('upload/no_image.jpg') }}" alt="">

                            </div>
                       </th>
                    </tr>
                    <tr>
                        <th style="font-size: 15px; color:rgba(0,0,0, 0.8)"><h4 class="name">{{ __('Name') }}: {{ $data->name }}</h4></th>
                        <th style="font-size: 15px; color:rgba(0,0,0, 0.8)"><h4>{{ __('Email') }}: {{ $data->email }}</h4></th>
                        <th style="font-size: 15px; color:rgba(0,0,0, 0.8)"><h4>{{ __('Phone') }}: {{ $data->phone}}</h4></th>
                        <th style="font-size: 15px; color:rgba(0,0,0, 0.8)"><h4>{{ __('Age') }}: {{ $data->age}}</h4></th>
                    </tr>
                </table>
            </div>


        <div class="item-description">


            {{-- @if($total >=23)
            <h5 class="table-title"> {{ $total}} - Anxiety Disorder </h5>
            @else
            <h5 class="table-title"> Anxiety Disorder down:{{ $total }}</h5>
            @endif --}}
            @if($total <21)

            <h5 class="table-title"> {{ $total}} - Anxiety Disorder mild ( 0 -20 ) </h5>

            @elseif($total >21 && $total<41)

            <h5 class="table-title"> {{ $total}} - Anxiety Disorder moderate (21- 40 ) </h5>

            @else
            <h5 class="table-title"> {{ $total}} - Anxiety Disorder severe (40+ ) </h5>

            @endif


            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">
                    <h2>A total score of ≥ 23 may indicate the presence of an Anxiety Disorder </h2>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="item-description">
            @if($PanicDisorder >= 5)
            <h5 class="table-title"> {{ $PanicDisorder}}- Panic Disorder or Significant Somatic Symptoms</h5>
            @else
            <h5 class="table-title"> Panic Disorder or Significant Somatic Symptoms down :{{ $PanicDisorder }}</h5>
            @endif

            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">
                    <h2>A score of 5 for items 1,2,6,9,11,12,15,17,18,19,22,25,28,32,36,38,40 may indicate Panic
                        Disorder or Significant Somatic Symptoms</h2>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="item-description">
            @if ($Generalized >= 12)
            <h5 class="table-title"> {{ $Generalized}}- Generalized Anxiety Disorder.</h5>
            @else
            <h5 class="table-title">  Generalized Anxiety Disorder down:{{ $Generalized }}</h5>
            @endif

            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">
                    <h2>A score of 12 for items 5,7,8,14,21,23,24,29,31,35,37,39,44 may indicate Generalized Anxiety Disorder.
                        </h2>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="item-description">
            @if($Separation >= 3)
            <h5 class="table-title">{{ $Separation}} - Separation Anxiety Disorder.</h5>
            @else
            <h5 class="table-title">Separation Anxiety Disorder down:{{ $Separation }}</h5>
            @endif

            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">
                    <h2>A score of 3 for items 4,13,16,20,26,30,33 may indicate Separation Anxiety Disorder.</h2>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="item-description">
            @if($SocialPhobis >= 7)
            <h5 class="table-title">{{ $SocialPhobis}} - Social Phobis Disorder.</h5>
            @else
            <h5 class="table-title"> Social Phobis Disorder down :{{ $SocialPhobis}}</h5>
            @endif

            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">
                    <h2>A score of 7 for items 3,10,27,34,41,42,43 may indicate Social Phobis Disorder.</h2>
                </tr>
                </tbody>
            </table>
        </div>

        @if($total <21)


        <div class="item-description">
            <h5 class="table-title">Remarks</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">
                    <h1 style=" background-color: #FED700; color: #0B0B0B; display: inline-block; padding: 5px 15px;text-transform: capitalize;font-size: 18px;border-radius: 5px; border: 1px solid #0b0b0b; margin-right: 5px">Milt (0-20)</h1>
                    <h1 style=" color: #0B0B0B; display: inline-block; padding: 5px 15px;text-transform: capitalize;font-size: 18px;border-radius: 5px; border: 1px solid #0b0b0b; margin-right: 5px">moderator (20-40 )</h1>
                    <h1 style=" color: #0B0B0B; display: inline-block; padding: 5px 15px;text-transform: capitalize;font-size: 18px;border-radius: 5px; margin-right: 5px">severe (40+ )</h1>
                </tr>
                </tbody>
            </table>
        </div>

        @elseif($total >21 && $total<41)

        <div class="item-description">
            <h5 class="table-title">Remarks</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">
                    <h1 style="color: #0B0B0B; display: inline-block; padding: 5px 15px;text-transform: capitalize;font-size: 18px;border-radius: 5px; border: 1px solid #0b0b0b; margin-right: 5px">Milt (0-20)</h1>
                    <h1 style="background-color: #FED700; color: #0B0B0B; display: inline-block; padding: 5px 15px;text-transform: capitalize;font-size: 18px;border-radius: 5px; border: 1px solid #0b0b0b; margin-right: 5px">moderator (20-40 )</h1>
                    <h1 style=" color: #0B0B0B; display: inline-block; padding: 5px 15px;text-transform: capitalize;font-size: 18px;border-radius: 5px; margin-right: 5px">severe (40+ )</h1>
                </tr>
                </tbody>
            </table>
        </div>

        @else


        <div class="item-description">
            <h5 class="table-title">Remarks</h5>
            <table class="custom--table">
                <tbody>

                <tr class="table_footer_row">
                    <h1 style="color: #0B0B0B; display: inline-block; padding: 5px 15px;text-transform: capitalize;font-size: 18px;border-radius: 5px; border: 1px solid #0b0b0b; margin-right: 5px">Milt (0-20)</h1>
                    <h1 style="color: #0B0B0B; display: inline-block; padding: 5px 15px;text-transform: capitalize;font-size: 18px;border-radius: 5px; border: 1px solid #0b0b0b; margin-right: 5px">moderator (20-40 )</h1>
                    <h1 style="background-color: #FED700; color: #0B0B0B; display: inline-block; padding: 5px 15px;text-transform: capitalize;font-size: 18px;border-radius: 5px; margin-right: 5px">severe (40+ )</h1>
                </tr>
                </tbody>
            </table>
        </div>

        @endif

    </div>
</div>

<!-- Invoice area end -->

</body>

</html>
