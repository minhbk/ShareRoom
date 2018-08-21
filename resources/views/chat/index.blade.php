@extends('layouts.chatUser-master')

@section('styles')
<script src="{{ asset('/js/app.js') }}" defer></script>
<link rel="stylesheet" type="text/css" href="{{ url('/css/chat.css') }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<script>
  window.TO_ID = {{ $to }}
  window.USER = {{ Auth::id() }}
</script>
@endsection

@section('content')
<div id="container" class="container">    
      <chat-messages :messages="messages" 
        :user="{{ Auth::user() }}"
        :name="{{ json_encode($name) }}"
      ></chat-messages>
      <chat-form
        v-on:messagesent="addMessage"
        :user="{{ Auth::user() }}"
        :to="{{ $to }}"
      ></chat-form>    
</div>
<!-- <div class="container">  
    <ol class="chat">
    <li class="other">
        <div class="avatar"><img src="/images/staff/staff-1.jpg" draggable="false"/></div>
      <div class="msg">
        <p>Hola!</p>
        <p>Te vienes a cenar al centro? <emoji class="pizza"/></p>
        <time>20:17</time>
      </div>
    </li>
    <li class="self">
        <div class="avatar"><img src="/images/staff/staff-1.jpg" draggable="false"/></div>
      <div class="msg">
        <p>Puff...</p>
        <p>Aún estoy haciendo el contexto de Góngora... <emoji class="books"/></p>
        <p>Mejor otro día</p>
        <time>20:18</time>
      </div>
    </li>
    <li class="other">
        <div class="avatar"><img src="/images/staff/staff-1.jpg" draggable="false"/></div>
      <div class="msg">
        <p>Qué contexto de Góngora? <emoji class="suffocated"/></p>
        <time>20:18</time>
      </div>
    </li>
    <li class="self">
        <div class="avatar"><img src="/images/staff/staff-1.jpg" draggable="false"/></div>
      <div class="msg">
        <p>El que mandó Marialu</p>
        <p>Es para mañana...</p>
        <time>20:18</time>
      </div>
    </li>
    <li class="other">
        <div class="avatar"><img src="/images/staff/staff-1.jpg" draggable="false"/></div>
      <div class="msg">
        <p><emoji class="scream"/></p>
        <p>Pásamelo! <emoji class="please"/></p>
        <time>20:18</time>
      </div>
    </li>
    <li class="self">
        <div class="avatar"><img src="/images/staff/staff-1.jpg" draggable="false"/></div>
      <div class="msg">
        <img src="https://i.imgur.com/QAROObc.jpg" draggable="false"/>
        <time>20:19</time>
      </div>
    </li>
    <li class="other">
        <div class="avatar"><img src="/images/staff/staff-1.jpg" draggable="false"/></div>
      <div class="msg">
        <p>Gracias! <emoji class="hearth_blue"/></p>
        <time>20:20</time>
      </div>
    </li>
        <div class="day">Hoy</div>
    <li class="self">
        <div class="avatar"><img src="/images/staff/staff-1.jpg" draggable="false"/></div>
      <div class="msg">
        <p>Te apetece jugar a Minecraft?</p>
        <time>18:03</time>
      </div>
    </li>
    <li class="other">
        <div class="avatar"><img src="/images/staff/staff-1.jpg" draggable="false"/></div>
      <div class="msg">
        <p>Venga va, hace ya mucho que no juego...</p>
        <time>18:07</time>
      </div>
    </li>
    <li class="self">
        <div class="avatar"><img src="/images/staff/staff-1.jpg" draggable="false"/></div>
      <div class="msg">
        <p>Ehh, me crashea el Launcher... <emoji class="cryalot"/></p>
        <time>18:08</time>
      </div>
    </li>
    <li class="other">
        <div class="avatar"><img src="/images/staff/staff-1.jpg" draggable="false"/></div>
      <div class="msg">
        <p><emoji class="lmao"/></p>
        <time>18:08</time>
      </div>
    </li>
    <li class="self">
        <div class="avatar"><img src="/images/staff/staff-1.jpg" draggable="false"/></div>
      <div class="msg">
        <p>Es broma</p>
        <p>Ataque Moai!</p>
        <p><span><emoji class="moai"/></span><span><emoji class="moai"/></span><span><emoji class="moai"/></span><span><emoji class="moai"/></span><span><emoji class="moai"/></span><span><emoji class="moai"/></span></p>
        <time>18:09</time>
      </div>
    </li>
    <li class="other">
        <div class="avatar"><img src="/images/staff/staff-1.jpg" draggable="false"/></div>
      <div class="msg">
          <p>Copón</p>
        <p><emoji class="funny"/></p>
        <time>18:08</time>
      </div>
    </li>
    <li class="self">
        <div class="avatar"><img src="/images/staff/staff-1.jpg" draggable="false"/></div>
      <div class="msg">
        <p>Hey there's a new update about this chat UI with more responsive elements! Check it now:</p>
        <p><a href="https://codepen.io/Varo/pen/YPmwpQ" target="parent">Chat UI 2.0</a></p>
        <time>18:09</time>
      </div>
    </li>
    </ol>
    <div>
    <input class="textarea" type="text" placeholder="Type here!"/><div class="emojis"></div>
</div>
</div> -->
@endsection