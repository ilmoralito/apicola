<div class="form-group">
    <label for="title">Titulo</label>
    <input id="title" name="title" value="{{ isset($post->title) ? $post->title : '' }}" class="form-control" required>
</div>

<div class="form-group">
    <label for="summary">Sumario</label>
    <textarea name="summary" id="summary" class="form-control" required>{{ isset($post->summary) ? $post->summary : '' }}</textarea>
</div>

<div class="form-group">
    <label for="body">Contenido del Post</label>
    <textarea id="summernote" name="body" required>{{ isset($post->body) ? $post->body : '' }}</textarea>
</div>

