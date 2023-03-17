
<form method="post" action="postcontact">
    @csrf
    <div class="form-group" role="form">
        <input type="text" class="form-control " required="required" placeholder="Your Name" name="name"/>
    </div>
    <div class="form-group">
        <input type="email" class="form-control " required="required" placeholder="Your Email" name="email"/>
    </div>
    <div class="form-group">
        <textarea name="message" required="required" class="form-control" style="min-height: 150px;" placeholder="Message"></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-info btn-block btn-lg">SUBMIT REQUEST</button>
    </div>
</form>
