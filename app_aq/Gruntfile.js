module.exports = function (grunt) {
   
  require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);

  var product = 'views/product/';
  var dev = 'views/dev/';
  var unjs = 'lib';
  grunt.initConfig({

    //清除目录
    clean: {
      all: [product + '**', product + '*.*'],
      image: product + 'images',
      css: product + 'css',
      html: product + '**/*'
    },
    
    //复制文件
    copy: {
      src: {
        files: [
          {expand: true, cwd: dev, src: ['*.html','javascript/lib/*.js','style/**/*.css'], dest: product,filter: 'isFile'}
        ]
      },
      image: {
        files: [
          {expand: true, cwd: dev, src: ['images/**/*.{png,jpg,jpeg,gif}'], dest: product}
        ]
      }
    },

    // 文件合并
    concat: {
      options: {
        separator: ';',
        stripBanners: true
      }
    },

    // 压缩JS
    uglify: {
      prod: {
        options: {
          mangle: {
            except: ['require', 'exports', 'module', 'window']
          },
          compress: {
            global_defs: {
              PROD: true
            },
            dead_code: true,
            pure_funcs: [
              "console.log",
              "console.info"
            ]
          }
        },

        files: [{
            expand: true,
            cwd: product,
            src: ['javascript/**/*.js', '!javascript/**/*.min.js', '!javascript/lib/*.js'],
            dest: product
        }]
      }
    },

    // 压缩CSS
    cssmin: {
      prod: {
        options: {
          report: 'gzip'
        },
        files: [
          {
            expand: true,
            cwd: dev,
            src: ['style/**/*.css'],
            dest: product
          }
        ]
      }
    },

    // 压缩图片
    imagemin: {
      prod: {
        options: {
          optimizationLevel: 7,
          pngquant: true
        },
        files: [
          {expand: true, cwd: product + '**', src: [product + 'images/*.{png,jpg,jpeg,gif,webp,svg}'], dest: product + '**'}
        ]
      }
    },

    // 处理html中css、js 引入合并问题
    usemin: {
      html: product + '*.html'
    },

    // 压缩HTML
    htmlmin: {
      options: {
        removeComments: true,
        removeCommentsFromCDATA: true,
        collapseWhitespace: true,
        collapseBooleanAttributes: true,
        removeAttributeQuotes: true,
        removeRedundantAttributes: true,
        useShortDoctype: true,
        removeEmptyAttributes: true,
        removeOptionalTags: true
      },
      html: {
        files: [
          {expand: true, cwd: product, src: ['*.html'], dest: product}
        ]
      }
    }

  });

  // 自定义合并规则
  grunt.registerTask("scanrule", "scane folder js and create js",function(){
    grunt.file.expand(dev + "javascript/*").forEach(function (dir) {
        var dirName = dir.substr(dir.lastIndexOf('/')+1);
        var concat = grunt.config.get('concat')|| {};
        if(dirName!=unjs){
            concat[dirName] = {
              src: [dir + '/**/*.js'],
              dest: product + 'javascript/' + dirName + '/' + dirName + '.js'
            };
        }
        grunt.config.set('concat', concat);
    });
  });

  //线上环境
  grunt.registerTask('prod', [
    'copy',                 //复制文件
    'scanrule',             //扫描文件夹
    'concat',               //合并文件
    'imagemin',             //图片压缩
    'cssmin',               //CSS压缩
    'uglify',               //JS压缩
    'usemin'                //HTML处理
    // 'htmlmin'               //HTML压缩
  ]);
  
  //测试环境
  grunt.registerTask('test', [
    'copy',                 //复制文件
    'scanrule',             //扫描文件夹
    'concat',               //合并文件
    'imagemin'             //图片压缩
  ]);

  grunt.registerTask('pub', ['clean', 'prod']);
  grunt.registerTask('dev', ['clean', 'test']);
};