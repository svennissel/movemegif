# movemegif

An Animated GIF creation library in pure PHP

Requires PHP 5.3 or higher.
Requires GD library (use `apt-get install php5-gd` or similar, to install)

Thanks a great deal to Matthew Flickinger for writing an awesome [GIF format explanation](http://www.matthewflickinger.com/lab/whatsinagif/index.html)

## Examples

The source code contains a few examples to help you on the way
 
### Pong
 
The PONG example shows how you can keep the filesize small by using clipping and using distinct frames to draw parts of the image. 

![Pong](https://raw.githubusercontent.com/garfix/movemegif/master/images/pong.gif)


## Related

Another PHP animated GIF library was written by László Zsidi and can be found at [phpclasses.org](http://www.phpclasses.org/package/3163-PHP-Generate-GIF-animations-from-a-set-of-GIF-images.html)

The standard GIF library is written in C and can be found [here](https://sourceforge.net/projects/giflib/)

The GIF 89a specification is located [here](https://www.w3.org/Graphics/GIF/spec-gif89a.txt)
