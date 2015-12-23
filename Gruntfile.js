module.exports = function (grunt) {
    "use strict";
    require('time-grunt')(grunt);
    // require('load-grunt-tasks')(grunt);
    
    require('jit-grunt')(grunt, {
        ngAnnotate: 'grunt-ng-annotate'
    });

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        /**
         * Directory variables
         */
        app : {
            root : 'app/content/themes/<%= pkg.name %>',
            
            js : '<%= app.root %>/js',
            css : '<%= app.root %>',
            assets : '<%= app.root %>/assets'
        },
        src : {
            bower : 'bower_components',
            root : 'src',
            js : '<%= src.root %>/js',
            sass : '<%= src.root %>/sass',
            temp : '<%= src.root %>/temp',
            html : '<%= src.root %>/templating',
            
            assets : '<%= src.root %>/assets'
        },
    
        /**
         * concat setup remember to include ngAnnotated files
         */
        concat: {
            options : {
                sourceMap : true,
            },
            vendors : {
                src : [
                    '<%= src.bower %>/lodash/lodash.js',
                    '<%= src.bower %>/jquery/dist/jquery.js',
                    '<%= src.bower %>/bootstrap-sass/assets/javascripts/bootstrap/transition.js',
                    '<%= src.bower %>/bootstrap-sass/assets/javascripts/bootstrap/collapse.js',
                    '<%= src.bower %>/bootstrap-sass/assets/javascripts/bootstrap/tooltip.js',
                    '<%= src.bower %>/Responsive-Lightbox/jquery.lightbox.min.js',
                ],
                dest : '<%= app.js %>/vendors.js',
                nonull : true
            },
            app: {
                src: [
                    '<%= src.js %>/**/*.js',
                    '<%= src.js %>/*.js'
                ],
                dest: '<%= app.js %>/site.js',
                nonull : true
            },
        },

        /**
         * uglify setup
         */
        uglify: {
            options: {
                mangle: false,
                sourceMap: true,
                banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
            },
            vendors: {
                files: {
                    '<%= app.js %>/vendors.min.js': '<%= app.js %>/vendors.js'
                }
            },
            site: {
                files: {
                    '<%= app.js %>/site.min.js': '<%= app.js %>/site.js'
                }
            },
            modernizr: {
                files: {
                    '<%= app.js %>/modernizr-custom.min.js': ['<%= app.js %>/modernizr-custom.js']
                }
            }
        },

        /**
         * SASS setup
         */
        sass: {
            dist: {
                options: {
                    loadPath: [
                        '',
                        ''
                    ],
                    banner: '/*\nTheme Name: <%= pkg.name %>\nTemplate: plant_boilerplate\nVersion: <%=pkg.version %>\nDescription: <%= pkg.description%>\nAuthor: <%= pkg.author %>\n*/',
                    style: 'expanded'
                },
                files: {
                    '<%= app.css %>/style.css': '<%= src.sass %>/style.scss'
                }
            },
        },
        cssmin: {
            target: {
                files: {
                    '<%= app.css %>/style.min.css': '<%= app.css %>/style.css'
                }
            }
        },
        /**
         * Add a custom modernizr based on what is actually used
         */
        modernizr: {
            dist: {
                "devFile" : "<%= src.bower %>/modernizr/modernizr.js",
                "outputFile" : "<%= app.js %>/modernizr-custom.js",
                "extra" : {
                    "shiv" : true,
                    "load" : true,
                    "mq" : true,
                    "cssclasses" : true
                },
                "extensibility" : {
                    "addtest" : true,
                    "prefixed" : false,
                    "teststyles" : false,
                    "testprops" : false,
                    "testallprops" : false,
                    "hasevents" : false,
                    "prefixes" : false,
                    "domprefixes" : false
                },
                "uglify" : false,
                "parseFiles" : true,
                "files" : {
                    "src": ['<%= app.css %>/style.css', '<%= app.js %>/site.js', '<%= app.js %>/vendors.js']
                }
            }
        },

        /**
         * Copy wordpress theme files from src to theme
         */
        copy: {
 
            themeTemplates: {
                expand : true,
                cwd : '<%= src.html %>',
                src : ['**', '**/*'],
                dest : '<%= app.root %>'
            }
        },

        // sync : {
        //     themeFiles : {
        //         files : [{
        //             cwd : '<%= src.html %>',
        //             src : ['**', '**/*'],
        //             dest : '<%= app.root %>'
        //         }],
        //         ignoreInDest : ['**/.js', '**/.css', 'assets/']
        //     }
        // },

        /**
         * Remove temp files
         */
        clean: {

            temp : ['<%= src.temp %>']
        },

        /**
         * Minify image assets
         */
        imagemin: {
            assets: {
                files: [{
                    expand: true,
                    cwd: '<%= src.assets %>/',
                    src: ['**/*.{png,jpg,gif}'],
                    dest: '<%= app.assets %>/'
                }]
            },
            uploads: {
                files: [{
                    expand: true,
                    cwd: 'app/content/uploads/',
                    src: ['**/*.{png,jpg,gif}'],
                    dest: 'app/content/uploads/'
                }]
            }
        },

        /**
         * Minify svg assets
         */
        svgmin: {
            options: {
                plugins: [
                    {
                        removeViewBox: false
                    }, {
                        removeUselessStrokeAndFill: false
                    }, {
                        convertPathData: {
                            straightCurves: false
                        }
                    }
                ]
            },
            dist: {
                files: [{
                    expand: true,
                    cwd: '<%= src.assets %>/',
                    src: ['**/*.svg'],
                    dest: '<%= app.assets %>/',
                    ext: '.svg'
                }]
            }
        },

        /**
         * Watch setup
         */
        watch: {
            jsfiles : {
                options : {
                    livereload : 35729
                },
                files: ['<%= src.js %>/**/*.js'],
                tasks: ['js_build']
            },
            sassfiles: {
                options : {
                    livereload : 35729
                },
                files: ['<%= src.sass %>/**/*.scss'],
                tasks: ['css_build']
            },
            assetsfiles: {
                options : {
                    livereload : 35729
                },
                files: ['<%= src.assets %>/**/*.{png,jpg,gif}', '<%= src.assets %>/*.{png,jpg,gif}', '<%= src.assets %>/**/*.svg', '<%= src.assets %>/*.svg'],
                tasks: ['assets_build']
            },
            templatefiles: {
                files: ['<%= src.html %>/**'],
                tasks: ['template_build']
            }
        },

        /**
         * Notify setup
         */
        notify_hooks: {
            options: {
                enabled: true,
                title: "<%= pkg.name %>" // defaults to the name in package.json, or will use project directory's name
            }
        },
        notify: {
            all : {
                options : {
                    message : 'APP build'
                }
            },
            css: {
                options: {
                    message: 'CSS build',
                }
            },
            js: {
                options: {
                    message: 'JS build',
                }
            },
            templates: {
                options: {
                    message: 'Templates build',
                }
            },
            assets: {
                options: {
                    message: 'Assets build',
                }
            }
        },
        concurrent: {
            concurrentOne : {
                tasks : ['copy', 'concat', 'sass'],
                options: {
                    logConcurrentOutput: true,
                    limit : 4
                }
            },
            concurrentTwo : {
                tasks : ['cssmin', 'uglify', 'imagemin:assets', 'svgmin'],
                options: {
                    logConcurrentOutput: true,
                    limit : 4
                }
            }
        },

        exec : {
            bower : {
                command : 'bower install'
            }
        },
    });

    grunt.registerTask('template_build', [
        'copy:themeTemplates',
        'notify:templates'
    ]);

    grunt.registerTask('css_build', [
        'sass',
        'modernizr',
        'cssmin',
        'notify:css'
    ]);

    grunt.registerTask('js_build', [
        
        'concat:app',
        'modernizr',
        'uglify:site',
        'clean',
        'notify:js'
    ]);

    grunt.registerTask('assets_build', [
        'cssmin',
        'svgmin',
        'notify:assets'
    ]);

    grunt.registerTask('once', [
        
        'concurrent:concurrentOne',
        'concurrent:concurrentTwo',
        'modernizr',
        'clean',
        'notify:all'
    ]);

    grunt.registerTask('default', [
        'exec:bower',
        'once',
        'watch'
    ]);

};