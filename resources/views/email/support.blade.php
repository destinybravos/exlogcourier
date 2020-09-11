{{-- @component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent --}}
<div class="table-responsive">
    <table class="table">
        <tbody>
            <tr>
                <td>
                    <h4 style="background-color: #261c6a, text-align:center; color:white;">
                        <img src="https://exlogcourier.com/img/exlog_logo.jpg" alt="Express Logistics and Courier Services." style="display:inline-block; max-height:50px;">
                        
                    </h4>
                </td>
            </tr>

            <tr>
                <td>
                    <div style="padding: 30px;">
                        {!! $message !!}
                    </div>
                </td>
            </tr>
            
            <tr>
                <td>
                    <div style="background-color: #e96901, text-align:center; color:white;">
                        <small>from: exlogcourier.com</small>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
