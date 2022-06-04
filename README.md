# eu_im

changes on original [securimage.php](https://github.com/dapphp/securimage):

```php
protected function output()
{
    ...

    switch ($this->image_type) {
        
        default:
            if ($this->send_headers) header("Content-Type: image/png");
            // imagepng($this->im);
            imagepng($this->im, "{$this->output_dir}/{$this->code_display}.png");
            break;
    }

 ...
}
```

version 3.6.9 from [MR](https://github.com/dapphp/securimage/pull/112) for compatibility with PHP 8.1.

Generate dataset in current folder `images`

```bash
php main.php ./images
```

or generating 100,000 images

```bash
bash ./gen.sh
```

