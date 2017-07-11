@extends('layouts.app')

@section('title', '| Home Page')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1>Maersk Line</h1>
                <div style="font-size:18px;margin-bottom:13px;" class="text-justify">
                    Maersk Line is the global container division and the largest operating unit of the A.P. Moller – Maersk Group,
                    a Danish business conglomerate. It is the world's largest container shipping company having customers through
                    374 offices in 116 countries. It employs approximately 7,000 sea farers and approximately 25,000 land-based people.
                    Maersk Line operates over 600 vessels and has a capacity of 2.6 million TEU. The company was founded in 1928.
                </div>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn More</a></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="col-md-10 col-md-offset-1">
                <h3 class="text-center"><strong>Corporate Profile</strong></h3>
                <hr>
                <p class="text-justify" style="font-family:serif; font-size: 18px;">
                    Operating in 100 countries and transporting goods around the globe, at first glance it would appear Danish shipping
                    company Maersk Line is already handling all the cargo it can manage. But when Maersk determined that the volume of most
                    of the goods it was shipping had grown to full capacity, the company decided that cloud powered solutions would be a
                    crucial part of rectifying the situation.
                </p><br>
            </div>
        </div>
        <div class="col-md-6">
            <div class="col-md-10 col-md-offset-1">
                <h3 class="text-center"><strong>CMS Functionalities</strong></h3>
                <hr>
                <p class="text-justify" style="font-family:serif; font-size: 18px;">
                    CMS will provide tenant web solution that can perform:
                <ul style="font-family:serif; font-size: 18px;">
                    <li>CRUD (Create, Read, Update, Delete) operations for container, warehouse, shipment and customer</li>
                    <li>Automated allocating of inbound containers to warehouses and plan outbound containers to individual haulier vehicles</li>
                    <li>Failover management</li>
                    <li>Import, export and transhipment processing to gate operations</li>
                </ul>
                </p><br>
            </div>
        </div>
    </div>
</div>
@endsection