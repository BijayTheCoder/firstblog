@extends('layouts.master')


<div style="margin-left: 250px" class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Full Name</th>
                    <th>E-Mail</th>
                    <th>Message</th>
                    <th>Send Message</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($contacts as $data)
                  <tr>
                    <td>{{ $data->fullname }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->message }}</td>
                    <td><button id="send_message" type="button" class="btn btn-block btn-primary" onclick="sendMsg()">Send Message</button></td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
                <div>
                  <p id="msgsent"></p>
                </div>
              </div>
              <!-- /.card-body -->

<script>
  function sendMsg(){
    document.getElementById("msgsent").innerHTML="Message Sucessfully Sent";
  }
</script>