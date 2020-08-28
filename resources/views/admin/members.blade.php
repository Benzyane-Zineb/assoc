@extends('layouts.layout')

@section('title','dashboard')

@section('content')

@include('layouts.navbar')

<h1 class="text-center">Manage Members</h1>
        <div class="container">
            <div class="table-responsive">
                <table class="main-table text-center table table-bordered">
                    <tr>
                        <td>#ID</td>
                        <td>Avatar</td>
                        <td>Username</td>
                        <td>Email</td>
                        <td>Full Name</td>
                        <td>Registred Date</td>
                        <td>Control</td>
                    </tr>
                    <?php
                        //foreach($rows as $row)
                        //{
                            echo"<tr>";
                            echo '<td>' . 'UserID'. '</td>';
                            echo '<td> <img src=uploads/avatars/></td>';
                            echo '<td>' . 'Username'. '</td>';
                            echo '<td>' . 'Email'. '</td>';
                            echo '<td>' . 'FullName'. '</td>';
                            echo '<td>' . 'Date'. '</td>';
                            echo '<td>
                                <a href="#" class="btn btn-success"><i class="fa fa-edit"></i> Edit</a>
                                <a href="#" class="btn btn-danger confirm"><i class="fas fa-times"></i> Delete</a>';
                                //if ($row['RegStatus'] == 0)
                                    echo '<a href="#" class="btn btn-primary activate-btn"><i class="fas fa-check"></i> Activate</a>';
                            echo '</td>';
                            echo '</tr>';
                        //}
                    ?>
                </table>
            </div>
            <a href="{{route('admin.add.member')}}" class="btn btn-primary"><i class="fa fa-plus"></i> New Member</a>
        </div>

        @endsection
