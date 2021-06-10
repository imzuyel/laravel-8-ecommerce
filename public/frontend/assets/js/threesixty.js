/*! threesixty-slider  version 2.5.2 */
/* http://github.com/etetlow/threesixty-slider.git */

/*!
 * 360 degree Image Slider v2.5.2
 * http://gaurav.jassal.me
 * http://etetlow.co.uk
 * Copyright 2015, gaurav@jassal.me
 * Dual licensed under the MIT or GPL Version 3 licenses.
 *
 */
(function ($) {
    'use strict';
    /**
     * @class ThreeSixty
     * **The ThreeSixty slider class**.
     *
     * This as jQuery plugin to create 360 degree product image slider.
     * The plugin is full customizable with number of options provided. The plugin
     * have the power to display images in any angle 360 degrees. This feature can be
     * used successfully in many use cases e.g. on an e-commerce site to help customers
     * look products in detail, from any angle they desire.
     *
     * **Features**
     *
     * - Smooth Animation
     * - Plenty of option parameters for customization
     * - Api interaction
     * - Simple mouse interaction
     * - Custom behavior tweaking
     * - Support for touch devices
     * - Easy to integrate
     * - No flash
     *
     * Example code:
     *      var product1 = $('.product1').ThreeSixty({
     *        totalFrames: 72,
     *        endFrame: 72,
     *        currentFrame: 1,
     *        imgList: '.threesixty_images',
     *        progress: '.spinner',
     *        imagePath:'/assets/product1/',
     *        filePrefix: 'ipod-',
     *        ext: '.jpg',
     *        height: 265,
     *        width: 400,
     *        navigation: true
     *      });
     * **Note:** There are loads other options that you can override to customize
     * this plugin.

     * @extends jQuery
     * @singleton
     * @param {String} [el] jQuery selector string for the parent container
     * @param {Object} [options] An optional config object
     *
     * @return this
     */
    $.ThreeSixty = function (el, options) {
        // To avoid scope issues, use 'base' instead of 'this'
        // to reference this class from internal events and functions.
        var base = this,
            AppConfig,
            frames = [],
            VERSION = '2.5.2';
        // Access to jQuery and DOM versions of element
        /**
         * @property {$el}
         * jQuery Dom node attached to the slider inherits all jQuery public functions.
         */
        base.$el = $(el);
        base.el = el;
        // Add a reverse reference to the DOM object
        base.$el.data('ThreeSixty', base);
        /**
         * @method init
         * The function extends the user options with default settings for the
         * slider and initilize the slider.
         * **Style Override example**
         *
         *      var product1 = $('.product1').ThreeSixty({
         *        totalFrames: 72,
         *        endFrame: 72,
         *        currentFrame: 1,
         *        imgList: '.threesixty_images',
         *        progress: '.spinner',
         *        imagePath:'/assets/product1/',
         *        filePrefix: 'ipod-',
         *        ext: '.jpg',
         *        height: 265,
         *        width: 400,
         *        navigation: true,
         *        styles: {
         *          border: 2px solide #b4b4b4,
         *          background: url(http://example.com/images/loader.gif) no-repeat
         *        }
         *      });
         */
        base.init = function () {
            AppConfig = $.extend({}, $.ThreeSixty.defaultOptions, options);
            if (AppConfig.disableSpin) {
                AppConfig.currentFrame = 1;
                AppConfig.endFrame = 1;
            }
            base.initProgress();
            base.loadImages();
        };

        /*
         * @method maxHeight
         * Function calculates the maximum possible height of the parent element
         *
         */

        base.maxHeight = function (container) {
            var offset = base.el.offset(),
    			top = offset.top,
                yOffset = window.pageYOffset,
    			total = $(window).height(),
                distance = top - yOffset,
    			maxHeight = total - distance;

            if (yOffset === 0 || top === 'undefined') {
                maxHeight = 'undefined';
            }
            return maxHeight;
        };

        /* @method resize
         * Function to make sure the slider fits.
         */
        base.resize = function () {
            var aw = AppConfig.width,
                ah = AppConfig.height,
                lr = ah / aw,
                pr = aw / ah,
                pw = base.el.parent().width(),
                ph = base.el.parent().height(),
                maxHeight = base.maxHeight(),
                altWidth = $(window).width(),
                altHeight = $(window).height(),
                sum = pw * lr;

            if (pw > altWidth) {
                pw = altWidth;
            }
            if (ph > altHeight) {
                ph = altHeight;
            }
            if (maxHeight === 0 || maxHeight === 'undefined') {
                maxHeight = altHeight;
            }
            if ((pw * lr) > maxHeight) {
                base.$el.css({
                    height: maxHeight + 'px',
                    width: (maxHeight * pr) + 'px'
                });
            } else {
                base.$el.css({
                    width: pw + 'px',
                    height: sum + 'px'
                });
            }
        };

        /*
         * @method responsive
         * Function calculates and set responsive height and width
         *
         */

        base.responsive = function () {
            if (AppConfig.responsive) {
                var aw = AppConfig.width,
                ah = AppConfig.height,
                lr = ah / aw,
                pr = aw / ah,
                pw = base.el.parent().width(),
                ph = base.el.parent().height(),
                maxHeight = base.maxHeight(),
                altWidth = $(window).width(),
                altHeight = $(window).height();

                if (pw > altWidth) {
                    pw = altWidth;
                }
                if (ph > altHeight) {
                    ph = altHeight;
                }
                if (maxHeight === 0 || maxHeight === 'undefined') {
                    maxHeight = altHeight;
                }
                if ((pw * lr) > maxHeight) {
                    base.$el.css({
                        height: maxHeight + 'px',
                        width: (maxHeight * pr) + 'px'
                    });
                } else {
                    base.$el.css({
                        width: '100%',
                        height: (pw* lr) + 'px'
                    });
                }        
            }
        };

        /**
         * @method fSBackgroundColor
         * Sets background color when fullscreen
         */
        base.fSBackgroundColor = function() {
            var bgColor = AppConfig.fSBackgroundColor;
            return bgColor;
        };

        /**
         * @method fullscreen
         * Creates a fullscreen capability if set to true in settings
         */
        base.fullscreen = function() {
            var aw = AppConfig.width,
                ah = AppConfig.height,
                lr = ah / aw,
                pr = aw / ah,
                wsh = screen.height,
                wsw = screen.width,
                bgColor = base.fSBackgroundColor;

            if (AppConfig.fullscreen) {      
                var target = base.$el[0];
                if (screenfull.enabled) {
                    screenfull.toggle(target);
                    screenfull.onchange(function() {
                        if (screenfull.isFullscreen) {
                            $('.btnFull span').removeClass('icon-fullscreen').addClass('icon-resize');
                            if ((wsw * lr) > wsh) {
                                base.$el.css({
                                    height: wsh + 'px',
                                    width: (wsh * pr) + 'px',
                                    backgroundColor: bgColor
                                });
                            } else {
                                base.$el.css({
                                    width: wsw + 'px',
                                    height: (wsw * lr) + 'px',
                                    backgroundColor: bgColor
                                });
                            }
                        } else {
                            $('.btnFull span').removeClass('icon-resize').addClass('icon-fullscreen');
                            base.$el.css({
                                width: aw + 'px',
                                height: ah + 'px',
                                backgroundColor: ''
                            });
                            base.resize();
                        }
                    });
                }
            }
        };

        /**
         * @method initProgress
         * The function sets initial styles and start the progress indicator
         * to show loading of images.
         *
         * @private
         */
        base.initProgress = function () {
            base.$el.css({
                width: AppConfig.width + 'px',
                height: AppConfig.height + 'px',
                'background-image': 'none !important'
            });
            if (AppConfig.styles) {
                base.$el.css(AppConfig.styles);
            }

            base.resize();

            base.$el.find(AppConfig.progress).css({
                marginTop: ((AppConfig.height / 2) - 15) + 'px'
            });
            base.$el.find(AppConfig.progress).fadeIn('slow');
            base.$el.find(AppConfig.imgList).hide();
        };

        /**
         * @method loadImages
         * @private
         * The function asynchronously loads images and inject into the slider.
         */
        base.loadImages = function () {
            var li, imageName, image, host, baseIndex;
            li = document.createElement('li');
            baseIndex = AppConfig.zeroBased ? 0 : 1;
            imageName = !AppConfig.imgArray ?
                AppConfig.domain + AppConfig.imagePath + AppConfig.filePrefix + base.zeroPad((AppConfig.loadedImages + baseIndex)) + AppConfig.ext + ((base.browser.isIE()) ? '?' + new Date().getTime() : '') :
                AppConfig.imgArray[AppConfig.loadedImages];
            image = $('<img>').attr('src', imageName).attr('alt', '360 Slider Images').addClass('previous-image normal').appendTo(li);

            frames.push(image);

            base.$el.find(AppConfig.imgList).append(li);

            base.imageLoadNext();
        };

        /**
         * @method imageLoadNext
         * @private
         * The function load next image or call imagesLoaded()
         */
        base.imageLoadNext = function () {
            AppConfig.loadedImages += 1;
            if (AppConfig.loadedImages >= AppConfig.totalFrames) {
                base.imagesLoaded();
            } else {
                base.loadImages();
            }
        };

        /**
         * @method imagesLoaded
         * @private
         * The function gets triggers once the image is loaded. We also update
         * the progress percentage in this function.
         */
        base.imagesLoaded = function () {
            var loaded = 0;
            $.each(frames, function (i, image) {
                $(image).on('load', function () {
                    loaded += 1;
                    $(AppConfig.progress + ' span').text(Math.floor(loaded / AppConfig.totalFrames * 100) + '%');
                    if (loaded >= AppConfig.totalFrames) {
                        if (AppConfig.disableSpin) {
                            frames[0].removeClass('previous-image').addClass('current-image');
                        }
                        $(AppConfig.progress).fadeOut('slow', function () {
                            $(this).hide();
                            base.showImages();
                            base.showNavigation();
                        });
                    }
                });
            });
        };

        /**
         * @method showImages
         * @private
         * This function is called when all the images are loaded.
         * **The function does following operations**
         * - Removes background image placeholder
         * - Displays the 360 images
         * - Initilizes mouse intraction events
         */
        base.showImages = function () {
            base.$el.find('.txtC').fadeIn();
            base.$el.find(AppConfig.imgList).fadeIn();
            base.ready = true;
            AppConfig.ready = true;

            if (AppConfig.drag) {
                base.initEvents();
            }
            base.refresh();
            base.initPlugins();
            AppConfig.onReady();

            setTimeout(function () {
                base.resize();
            }, 50);
        };

        /** @method initPlugins
         * The function to initilize external plugins
         */
        base.initPlugins = function () {
            $.each(AppConfig.plugins, function (i, plugin) {
                if (typeof $[plugin] === 'function') {
                    $[plugin].call(base, base.$el, AppConfig);
                } else {
                    throw new Error(plugin + ' not available.');
                }
            });
        };

        /**
         * @method showNavigation
         * Creates a navigation panel if navigation is set to true in the
         * settings.
         */
        base.showNavigation = function () {
            if (AppConfig.navigation && !AppConfig.navigation_init) { 
                var nav_bar, next_btn, next, previous_btn, previous, play_stop_btn, play_stop, full_btn, full, position;

                if (AppConfig.position) {
                    position = AppConfig.position;
                    nav_bar = $('<div/>').attr('class', 'nav_bar ' + position);
                } else {
                    nav_bar = $('<div/').attr('class', 'nav_bar top-right');
                }

                previous_btn = $('<div/>').attr('class', 'btnPrev butn');
                previous = $('<span/>').attr('class', 'icon-back');
                play_stop_btn = $('<div/>').attr('class', 'btnPlay butn');
                play_stop = $('<span/>').attr('class', 'icon-play');
                next_btn = $('<div/>').attr('class', 'btnNext butn');
                next = $('<span/>').attr('class', 'icon-forward');

                previous_btn.append(previous);
                play_stop_btn.append(play_stop);
                next_btn.append(next);
                nav_bar.append(previous_btn);
                nav_bar.append(play_stop_btn);
                nav_bar.append(next_btn);

                if (AppConfig.fullscreen) {
                    full_btn = $('<div/>').attr('class', 'btnFull butn');
                    full = $('<span/>').attr('class', 'icon-fullscreen');
                    full_btn.append(full);
                    nav_bar.append(full_btn);
                }

                base.$el.prepend(nav_bar);

                next_btn.bind('mousedown touchstart', base.next);
                previous_btn.bind('mousedown touchstart', base.previous);
                play_stop_btn.bind('mousedown touchstart', base.play_stop);

                if (AppConfig.fullscreen) {
                    full_btn.bind('mousedown touchstart', base.fullscreen);
                }
                AppConfig.navigation_init = true;
            }
        };

        /**
         * @method play_stop
         * @private
         * Function toggles the autoplay rotation of 360 slider
         * @param {Object} [event] jQuery events object.
         *
         */

        base.play_stop = function (event) {
            event.preventDefault();

            if (!AppConfig.autoplay) {
                AppConfig.autoplay = true;
                AppConfig.play = setInterval(base.moveToNextFrame, AppConfig.playSpeed);
                $('.btnPlay span').removeClass('icon-play').addClass('icon-pause');
            } else {
                AppConfig.autoplay = false;
                $('.btnPlay span').removeClass('icon-pause').addClass('icon-play');
                clearInterval(AppConfig.play);
                AppConfig.play = null;
            }
        };

        /**
         * @method next
         * Using this function you can rotate 360 to next 5 frames.
         * @param {Object} [event] jQuery events object.
         *
         */

        base.next = function (event) {
            if (event) {
                event.preventDefault();
            }
            if (AppConfig.autoplayDirection === 1) {
                AppConfig.endFrame -= 5;
            } else {
                AppConfig.endFrame += 5;
            }
            base.refresh();
        };

        /**
         * @method previous
         * Using this function you can rotate 360 to previous 5 frames.
         * @param {Object} [event] jQuery events object.
         *
         */
        base.previous = function (event) {
            if (event) {
                event.preventDefault();
            }
            if (AppConfig.autoplayDirection === 1) {
                AppConfig.endFrame += 5;
            } else {
                AppConfig.endFrame -= 5;
            }
            base.refresh();
        };

        /**
         * @method play
         * You are start the auto rotaion for the slider with this function.
         *
         */
        base.play = function (speed, direction) {
            var _speed = speed || AppConfig.playSpeed;
            var _direction = direction || AppConfig.autoplayDirection;
            AppConfig.autoplayDirection = _direction;

            if (!AppConfig.autoplay) {
                AppConfig.autoplay = true;
                AppConfig.play = setInterval(base.moveToNextFrame, _speed);
            }
        };

        /**
         * @method stop
         * You can stop the auto rotation of the 360 slider with this function.
         *
         */

        base.stop = function () {
            if (AppConfig.autoplay) {
                AppConfig.autoplay = false;
                clearInterval(AppConfig.play);
                AppConfig.play = null;
            }
        };

        /**
         * @method endFrame
         * @private
         * Function animates to previous frame
         *
         */
        base.moveToNextFrame = function () {
            if (AppConfig.autoplayDirection === 1) {
                AppConfig.endFrame -= 1;
            } else {
                AppConfig.endFrame += 1;
            }
            base.refresh();
        };

        /**
         * @method gotoAndPlay
         * @public
         * Function animates to previous frame
         *
         */
        base.gotoAndPlay = function (n) {
            if (AppConfig.disableWrap) {
                AppConfig.endFrame = n;
                base.refresh();
            } else {
                // Since we could be looped around grab the multiplier
                var multiplier = Math.ceil(AppConfig.endFrame / AppConfig.totalFrames);
                if (multiplier === 0) {
                    multiplier = 1;
                }

                // Figure out the quickest path to the requested frame
                var realEndFrame = (multiplier > 1) ?
                    AppConfig.endFrame - ((multiplier - 1) * AppConfig.totalFrames) :
                    AppConfig.endFrame;

                var currentFromEnd = AppConfig.totalFrames - realEndFrame;

                // Jump past end if it's faster
                var newEndFrame = 0;
                if (n - realEndFrame > 0) {
                    // Faster to move the difference ahead?
                    if (n - realEndFrame < realEndFrame + (AppConfig.totalFrames - n)) {
                        newEndFrame = AppConfig.endFrame + (n - realEndFrame);
                    } else {
                        newEndFrame = AppConfig.endFrame - (realEndFrame + (AppConfig.totalFrames - n));
                    }
                } else {
                    // Faster to move the distance back?
                    if (realEndFrame - n < currentFromEnd + n) {
                        newEndFrame = AppConfig.endFrame - (realEndFrame - n);
                    } else {
                        newEndFrame = AppConfig.endFrame + (currentFromEnd + n);
                    }
                }

                // Now set the end frame
                if (realEndFrame !== n) {
                    AppConfig.endFrame = newEndFrame;
                    base.refresh();
                }
            }
        };


        /**
         * @method initEvents
         * @private
         * Function initilizes all the mouse and touch events for 360 slider movement.
         *
         */
        base.initEvents = function () {
            base.$el.bind('mousedown touchstart touchmove touchend mousemove click', function (event) {

                event.preventDefault();

                if ((event.type === 'mousedown' && event.which === 1) || event.type === 'touchstart') {
                    AppConfig.pointerStartPosX = base.getPointerEvent(event).pageX;
                    AppConfig.dragging = true;
                    AppConfig.onDragStart(AppConfig.currentFrame);
                } else if (event.type === 'touchmove') {
                    base.trackPointer(event);
                } else if (event.type === 'touchend') {
                    AppConfig.dragging = false;
                    AppConfig.onDragStop(AppConfig.endFrame);
                }
            });

            $(document).bind('mouseup', function (event) {
                AppConfig.dragging = false;
                AppConfig.onDragStop(AppConfig.endFrame);
                $(this).css('cursor', 'none');
            });

            $(window).bind('resize', function (event) {
                base.responsive();
            });

            $(document).bind('mousemove', function (event) {
                if (AppConfig.dragging) {
                    event.preventDefault();
                    if (base.browser.isIE && AppConfig.showCursor) {
                        base.$el.css('cursor', 'url(assets/images/hand_closed.png), auto');
                    }
                } else {
                    if (!base.browser.isIE && AppConfig.showCursor) {
                        base.$el.css('cursor', 'url(assets/images/hand_open.png), auto');
                    }
                }
                base.trackPointer(event);

            });

            $(window).resize(function () {
                base.responsive();
            });
        };

        /**
         * @method getPointerEvent
         * @private
         * Function returns touch pointer events
         *
         * @params {Object} [event]
         */
        base.getPointerEvent = function (event) {
            return event.originalEvent.targetTouches ? event.originalEvent.targetTouches[0] : event;
        };

        /**
         * @method trackPointer
         * @private
         * Function calculates the distance between the start pointer and end pointer/
         *
         * @params {Object} [event]
         */
        base.trackPointer = function (event) {
            if (AppConfig.ready && AppConfig.dragging) {
                AppConfig.pointerEndPosX = base.getPointerEvent(event).pageX;
                if (AppConfig.monitorStartTime < new Date().getTime() - AppConfig.monitorInt) {
                    AppConfig.pointerDistance = AppConfig.pointerEndPosX - AppConfig.pointerStartPosX;
                    if (AppConfig.pointerDistance > 0) {
                        AppConfig.endFrame = AppConfig.currentFrame + Math.ceil((AppConfig.totalFrames - 1) * AppConfig.speedMultiplier * (AppConfig.pointerDistance / base.$el.width()));
                    } else {
                        AppConfig.endFrame = AppConfig.currentFrame + Math.floor((AppConfig.totalFrames - 1) * AppConfig.speedMultiplier * (AppConfig.pointerDistance / base.$el.width()));
                    }

                    if (AppConfig.disableWrap) {
                        AppConfig.endFrame = Math.min(AppConfig.totalFrames - (AppConfig.zeroBased ? 1 : 0), AppConfig.endFrame);
                        AppConfig.endFrame = Math.max((AppConfig.zeroBased ? 0 : 1), AppConfig.endFrame);
                    }
                    base.refresh();
                    AppConfig.monitorStartTime = new Date().getTime();
                    AppConfig.pointerStartPosX = base.getPointerEvent(event).pageX;
                }
            }
        };

        /**
         * @method refresh
         * @public
         * Function refeshes the timer and set interval for render cycle.
         *
         */

        base.refresh = function () {
            if (AppConfig.ticker === 0) {
                AppConfig.ticker = setInterval(base.render, Math.round(1000 / AppConfig.framerate));
            }
        };

        /**
         * @method refresh
         * @private
         * Function render the animation frames on the screen with easing effect.
         */

        base.render = function () {
            var frameEasing;
            if (AppConfig.currentFrame !== AppConfig.endFrame) {
                frameEasing = AppConfig.endFrame < AppConfig.currentFrame ? Math.floor((AppConfig.endFrame - AppConfig.currentFrame) * 0.1) : Math.ceil((AppConfig.endFrame - AppConfig.currentFrame) * 0.1);
                base.hidePreviousFrame();
                AppConfig.currentFrame += frameEasing;
                base.showCurrentFrame();
                base.$el.trigger('frameIndexChanged', [base.getNormalizedCurrentFrame(), AppConfig.totalFrames]);
            } else {
                window.clearInterval(AppConfig.ticker);
                AppConfig.ticker = 0;
            }
        };

        /**
         * @method hidePreviousFrame
         * @private
         * Function hide the previous frame in the animation loop.
         */

        base.hidePreviousFrame = function () {
            frames[base.getNormalizedCurrentFrame()].removeClass('current-image').addClass('previous-image');
        };

        /**
         * @method showCurrentFrame
         * @private
         * Function shows the current frame in the animation loop.
         */
        base.showCurrentFrame = function () {
            frames[base.getNormalizedCurrentFrame()].removeClass('previous-image').addClass('current-image');
        };

        /**
         * @method getNormalizedCurrentFrame
         * @private
         * Function normalize and calculate the current frame once the user release the mouse and release touch event.
         */

        base.getNormalizedCurrentFrame = function () {
            var c, e;

            if (!AppConfig.disableWrap) {
                c = Math.ceil(AppConfig.currentFrame % AppConfig.totalFrames);
                if (c < 0) {
                    c += AppConfig.totalFrames - (AppConfig.zeroBased ? 1 : 0);
                }
            } else {
                c = Math.min(AppConfig.currentFrame, AppConfig.totalFrames - (AppConfig.zeroBased ? 1 : 0));
                e = Math.min(AppConfig.endFrame, AppConfig.totalFrames - (AppConfig.zeroBased ? 1 : 0));
                c = Math.max(c, (AppConfig.zeroBased ? 0 : 1));
                e = Math.max(e, (AppConfig.zeroBased ? 0 : 1));
                AppConfig.currentFrame = c;
                AppConfig.endFrame = e;
            }

            return c;
        };

        /*
         * @method getCurrentFrame
         * Function returns the current active frame.
         *
         * @return Number
         */

        base.getCurrentFrame = function () {
            return AppConfig.currentFrame;
        };

        /**
         * Function to return with zero padding.
         */
        base.zeroPad = function (num) {
            function pad(number, length) {
                var str = number.toString();
                if (AppConfig.zeroPadding) {
                    while (str.length < length) {
                        str = '0' + str;
                    }
                }
                return str;
            }

            var approximateLog = Math.log(AppConfig.totalFrames) / Math.LN10;
            var roundTo = 1e3;
            var roundedLog = Math.round(approximateLog * roundTo) / roundTo;
            var numChars = Math.floor(roundedLog) + 1;
            return pad(num, numChars);
        };

        base.browser = {};

        /**
         * Function to detect if the brower is IE
         * @return {boolean}
         *
         * http://msdn.microsoft.com/en-gb/library/ms537509(v=vs.85).aspx
         */
        base.browser.isIE = function () {
            var rv = -1;
            if (navigator.appName === 'Microsoft Internet Explorer') {
                var ua = navigator.userAgent;
                var re = new RegExp('MSIE ([0-9]{1,}[\\.0-9]{0,})');
                if (re.exec(ua) !== null) {
                    rv = parseFloat(RegExp.$1);
                }
            }

            return rv !== -1;
        };


        /**
         * @method getConfig
         * The function returns the extended version of config object the plugin is going to
         * user.
         *
         * @public
         *
         * @return Object
         */
        base.getConfig = function () {
            return AppConfig;
        };

        $.ThreeSixty.defaultOptions = {
            /**
             * @cfg {Boolean} dragging [dragging=false]
             * @private
             * Private propery contains a flags if users is in dragging mode.
             */
            dragging: false,
            /**
             * @cfg {Boolean} ready [ready=false]
             * @private
             * Private propery is set to true is all assets are loading and application is
             * ready to render 360 slider.
             */
            ready: false,
            /**
             * @cfg {Number} pointerStartPosX
             * @private
             * private property mouse pointer start x position when user starts dragging slider.
             */
            pointerStartPosX: 0,
            /**
             * @cfg {Number} pointerEndPosX
             * @private
             * private property mouse pointer start x position when user end dragging slider.
             */
            pointerEndPosX: 0,
            /**
             * @cfg {Number} pointerDistance
             * @private
             * private property contains the distance between the pointerStartPosX and pointerEndPosX
             */
            pointerDistance: 0,
            /**
             * @cfg {Number} monitorStartTime
             * @private
             * private property contains time user took in dragging mouse from pointerStartPosX and pointerEndPosX
             */
            monitorStartTime: 0,
            monitorInt: 10,
            /**
             * @cfg {Number} ticker
             * @private
             * Timer event that renders the 360
             */
            ticker: 0,
            /**
             * @cfg {Number} speedMultiplier
             * This property controls the sensitivity for the 360 slider
             */
            speedMultiplier: 7,
            /**
             * @cfg {Number} totalFrames
             * Set total number for frames used in the 360 rotation
             */
            totalFrames: 180,
            /**
             * @cfg {Number} currentFrame
             * Current frame of the slider.
             */
            currentFrame: 0,
            /**
             * @cfg {Array} endFrame
             * Private perperty contains information about the end frame when user slides the slider.
             */
            endFrame: 0,
            /**
             * @cfg {Number} loadedImages
             * Private property contains count of loaded images.
             */
            loadedImages: 0,
            /**
             * @cfg {Array} framerate
             * Set framerate for the slider animation
             */
            framerate: 60,
            /**
             * @cfg {String} domains
             * Set comma seprated list of all parallel domain from where 360 assets needs to be loaded.
             */
            domains: null,
            /**
             * @cfg {String} domain
             * Domain from where assets needs to be loaded. Use this propery is you want to load all assets from
             * single domain.
             */
            domain: '',
            /**
             * @cfg {Boolean} parallel
             * Set to true if you want to load assets from parallel domain. Default false
             */
            parallel: false,
            /**
             * @cfg {Number} queueAmount
             * Set number of calls to be made on parallel domains.
             */
            queueAmount: 8,
            /**
             * @cfg {Number} idle
             * Mouse Inactivite idle time in seconds. If set more than 0 will auto spine the slider
             */
            idle: 0,
            /**
             * @cfg {String} filePrefix
             * Prefix for the image file name before the numeric value.
             */
            filePrefix: '',
            /**
             * @cfg {String} ext [ext=.png]
             * Slider image extension.
             */
            ext: 'png',
            /**
             * @cfg {Object} height [300]
             * Height of the slider
             */
            height: 300,
            /**
             * @cfg {Number} width [300]
             * Width of the slider
             */
            width: 300,
            /**
             * @cfg {Object} styles
             * CSS Styles for the 360 slider
             */
            styles: {},
            /**
             * @cfg {Boolean} navigation[false]
             * State if navigation controls are visible or not.
             */
            navigation: false,
            /**
             * @cfg {string} position[top-right]
             * Positioning of navigation.
             * Options are top-left, top-center, top-right, bottom-right, bottom-center, bottom-left.
             */
            position: 'top-right',
            /**
             * @cfg {Boolean} fullscreen [false]
             * FullScreen now an option instead of plugin
             */
            fullscreen: false,
            /**
             * @cfg {string} fSBackgroundColor [white]
             * Set color of background in FullScreen (css style)
             */
            fSBackgroundColor: '#fff',
            /**
             * @cfg {Boolean} autoplay[false]
             * Autoplay the 360 animation
             */
            autoplay: false,
            /**
             * @cfg {number} autoplayDirection [1]
             * Direction for autoplay the 360 animation. 1 for right spin, and -1 for left spin.
             */
            autoplayDirection: 1,
            /**
             * Property to disable auto spin
             * @type {Boolean}
             */
            disableSpin: false,
            /**
             * Property to disable infinite wrap
             * @type {Boolean}
             */
            disableWrap: false,
            /**
             * Responsive width
             * @type {Boolean}
             */
            responsive: false,
            /**
             * Zero Padding for filenames
             * @type {Boolean}
             */
            zeroPadding: false,
            /**
             * Zero based for image filenames starting at 0
             * @type {Boolean}
             */
            zeroBased: false,
            /**
             * @type {Array}
             * List of plugins
             */
            plugins: [],
            /**
             * @type {Boolean}
             * Show hand cursor on drag
             */
            showCursor: false,
            /**
             * @cfg {Boolean} drag
             * Set it to false if you want to disable mousedrag or touch events
             */
            drag: true,
            /**
             * @cfg {Function} onReady
             * Callback triggers once all images are loaded and ready to render on the screen
             */
            onReady: function () {},
            /**
             * @cfg {Function} onDragStart
             * Callback triggers when a user initiates dragging
             */
            onDragStart: function () {},
            /**
             * @cfg {Function} onDragStop
             * Callback triggers when a user releases after dragging
             */
            onDragStop: function () {},
            /**
             * @cfg {String} imgList
             * Set ul element where image will be loaded
             */
            imgList: '.threesixty_images',
            /**
             * @cfg {Array} imgArray
             * Use set of images in array to load images
             */
            imgArray: null,
            /**
             * @cfg {Number} playSpeed
             * Value to control the speed of play button rotation
             */
            playSpeed: 100
        };
        base.init();
    };

    $.fn.ThreeSixty = function (options) {
        return Object.create(new $.ThreeSixty(this, options));
    };
}(jQuery));
/**
 *
 * Object.create method for perform as a fallback if method not available.
 * The syntax just takes away the illusion that JavaScript uses Classical Inheritance.
 */
if (typeof Object.create !== 'function') {
    Object.create = function (o) {
        'use strict';

        function F() {}
        F.prototype = o;
        return new F();
    };
}
