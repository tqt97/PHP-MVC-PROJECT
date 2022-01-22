<form action="/contact" method="POST"> 
    <div class="mb-3">
        <label class="form-label">Subject</label>
        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" name="email" placeholder="email" id="email" >
    </div>   
    <div class="mb-3">
        <label class="form-label">Body</label>
        <textarea class="form-control" id="body" name="body"></textarea>
    </div>    
    <button type="submit" class="btn btn-success">Submit</button>
</form>