<?php include 'includes/header.php'; ?>
    <form action="" role="form">
        <div class="form-group">
            <label>Topic Title</label>
            <input type="text" class="form-control" name="title" placeholder="Enter Post Title">
            </div>
        <div class="form-group">
            <label>Category</label>
            <select name="" id="" class="form-control">
                <option value="">Design</option>
                <option value="">Development</option>
                <option value="">Business & Marketing</option>
                <option value="">Search Engines</option>
                <option value="">Clouding & Hosting</option>
            </select>
        </div>
        <div class="form-group">
            <label>Topic Body</label>
            <textarea name="body" cols="80" rows="6" class="form-control body"></textarea>
            <script>
                CKEDITOR.replace('.body');
            </script>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
<?php include 'includes/footer.php'; ?>
