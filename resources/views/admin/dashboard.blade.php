@extends('layouts.layout')

@section('title','dashboard')

@section('content')

@include('layouts.navbar')

<div class="container home-stats text-center">
    <h1>Dashboard</h1>
    <div class="row justify-content-md-center">
        <div class="col-lg-4 col-md-6">
            <a href="members.php">
                <div class="stat st-members">
                    <i class="fas fa-users"></i>
                    <div class="info">
                            Total Members
                            <span>0</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6">
            <a href="members.php?page=pending">
                <div class="stat st-pending">
                    <i class="fas fa-user-plus"></i>
                    <div class="info">
                        Pending Members
                        <span>0</span>
                    </div>
                </div>
            </a>
        </div>

    </div>
</div>

<div class="container latest">
    <div class="row justify-content-md-center">
        <?php $latest = 6; ?>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-users"></i> Latest <?php echo $latest; ?> Registred Users
                    <span class="toggle-info float-right">
                        <i class="fas fa-minus"></i>
                    </span>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled latest-users">
                        <?php
                                echo '<li>'. 'Username';
                                        echo '<a href="#">';
                                            echo '<span class="btn btn-outline-primary float-right">';
                                                echo '<i class="fa fa-edit"></i> Edit';
                                            echo '</span>';
                                        echo'</a>';
                                            echo '<a href="#" class="btn btn-outline-success float-right"><i class="fas fa-check"></i> Activate</a>';
                                echo'</li>';
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
