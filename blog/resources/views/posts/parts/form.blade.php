
<div class="form-group">
    <input type="text" name="title" class="form-control" name="title" required value="{{ old('title') ?? $post->title ?? ''}}">
</div>
<div class="form-group">
    <textarea name="descr" rows="10" class="form-control" required>{{ old('descr') ?? $post->description ?? ''}}</textarea>
</div>
<div class="form-group">
    <input type="file" name="img">
</div>
