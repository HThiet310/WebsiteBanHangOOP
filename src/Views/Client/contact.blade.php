@extends('layouts.master')

@section('tilte')
Contact
@endsection

@section('content')
<div id="main">
            <div class="banner">
                <div class="text-banner">
                    <h1>Contact</h1>
                </div>

            </div>
            <div class="grid">
                <div class="left-grid" data-aos="fade-right">
                    <h3>Send Us A Message</h3>
                   <form action="{{ url('admin/contact/store') }}"  onsubmit="return validate()" enctype="multipart/form-data" method="POST">
                    <div class="">
                        <input type="text" id="address" placeholder=" Your Name">
                        <input type="text" id="address" placeholder=" Your Phone">
                        <input type="text" id="address" placeholder=" Your email Address">

                    </div>

                    <div class="">
                        <input type="text" id="note" placeholder="How can we help  ?">
                    </div>
                    <div class="">
                        <div class="">
                            <input type="submit" name="" value="SUBMIT" id="">
                        </div>
                    </div>
                   </form>
                </div>
    

@endsection