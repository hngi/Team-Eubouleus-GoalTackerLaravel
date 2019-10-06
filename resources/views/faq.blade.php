@extends('layouts.app')
@section('content')

<style>
    i.fas{
   float: right
    /* border: 1px solid red */
    }
</style>
{{--  Frequently Asked Questions  --}}

<div class="container mt-5">
    <p class="h2">Frequently Asked Questions</p>
    <p class="h4 mt-3 mb-5" style="color: rgb(18, 33, 80)">If you have any questions about the curriculum, the payment model or anything related to your career as a 
        software developer, we are here to help you.</p>
    <div id="accordion">
        <!-- goal one -->
        <div class="card">
            <div class="card-header">
                <a class="card-link" data-toggle="collapse" href="#collapseOne">
                    How does the GOAL TRACKER app work?
                    <i class="fas fa-plus"></i>
                </a>
            </div>
            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                <div class="card-body">
                    The GOAL TRACKER app is built to help people to better utilize their time and track their achievement progress.
                    You need to sign up using the Register menu, to be able to use the app. Register on the app and sign in with 
                    your details, then you can start tracking your goals on your dashboard
                </div>
            </div>
        </div>
        <!-- goal two -->
        <div class="card">
            <div class="card-header">
                <a class="card-link" data-toggle="collapse" href="#collapseTwo">
                    How do I add my goal(s)?
                    <i class="fas fa-plus"></i>
                </a>
            </div>
            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    To add your goal, click the login menu to get access to your dashboard. Click on the add goal button
                    Enter title of goal and its description Set a date for the goal
                    Then select a tracker option (ongoing, completed etc). Then submit
                </div>
            </div>
        </div>
        <!-- goal three -->
        <div class="card">
          <div class="card-header">
            <a class="card-link" data-toggle="collapse" href="#collapseThree">
              How do i know my achieved goal(s)?
              <i class="fas fa-plus"></i>
            </a>
          </div>
          <div id="collapseThree" class="collapse" data-parent="#accordion">
            <div class="card-body">
                    Different tasks are attached to a paticular goal. Hence, if you achieve the individual task, the goal will be achieved.
            </div>
          </div>
        </div>
        <!-- goal four -->
        <div class="card">
          <div class="card-header">
            <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
                How do I track my goals that are yet to be completed?
                <i class="fas fa-plus"></i>
            </a>
          </div>
          <div id="collapseFour" class="collapse" data-parent="#accordion">
            <div class="card-body">
                Login into your dashboard and click the ongoing button feature to view goals that are yet to be completed
            </div>
          </div>
        </div>
        <!-- goal five -->
        <div class="card">
          <div class="card-header">
            <a class="collapsed card-link" data-toggle="collapse" href="#collapseFive">
              Can i share my goals?
              <i class="fas fa-plus"></i>
            </a>
          </div>
          <div id="collapseFive" class="collapse" data-parent="#accordion">
            <div class="card-body">
                Yes, you can share your goals to social media handles like WhatsApp and LinkedIn
            </div>
          </div>
        </div>
        <!-- goal six -->
        <div class="card">
            <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapseSix">
                Do you have a mobile app?
                <i class="fas fa-plus"></i>
                </a>
            </div>
            <div id="collapseSix" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    No, we currently do not have. But a work in progress
                </div>
            </div>
        </div>
        <!-- goal six -->
        <div class="card">
            <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapseSix">
                Do you have a physical office?
                <i class="fas fa-plus"></i>
                </a>
            </div>
            <div id="collapseSix" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    No, our staff work remotely. You can always send us an email for any enquiry, we always available to respond
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('script')
// write your js code here
@endsection