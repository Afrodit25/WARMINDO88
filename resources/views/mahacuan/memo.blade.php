<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes">
    <meta name="theme-color" content="#000000">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="msapplication-navbutton-color" content="#000000">
    <meta name="apple-mobile-web-app-status-bar-style" content="#000000">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="https://images.linkcdn.cloud/V2/779/favicon/favicon-1933674734.png">
    <!-- Canonical -->
    <link rel="canonical" href="https://mahacuan.wiki/memo">
    <!-- End Canonical -->
    <link rel="preload" as="font"
        href="https://mahacuan.live/themes/1/font/font-awesome/webfonts/fa-solid-900.woff2" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" as="font"
        href="https://mahacuan.live/themes/1/font/font-awesome/webfonts/fa-brands-400.woff2" type="font/woff2"
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://mahacuan.live/themes/1/css/global.css">
    <link rel="stylesheet" type="text/css" href="https://mahacuan.live/themes/1/font/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://mahacuan.live/themes/1/vendor/dateranngepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css"
        href="https://mahacuan.live/themes/1/vendor/dataTables/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://mahacuan.live/themes/1/vendor/dataTables/responsive.dataTables.min.css">
    <link rel="stylesheet" id="templateStyle" type="text/css" href="https://mahacuan.live/custom/css/style.css">
    <link rel="stylesheet" type="text/css" href="https://mahacuan.live/themes/1/sass/custom.css?v=2.0.1520">
    <style>
        .swal2-popup.swal2-toast {
            flex-direction: row;
            align-items: center;
            width: auto;
            padding: .625em;
            overflow-y: hidden;
            background: #fff;
            box-shadow: 0 0 .625em #d9d9d9
        }

        .swal2-popup.swal2-toast .swal2-header {
            flex-direction: row;
            padding: 0
        }

        .swal2-popup.swal2-toast .swal2-title {
            flex-grow: 1;
            justify-content: flex-start;
            margin: 0 .6em;
            font-size: 1em
        }

        .swal2-popup.swal2-toast .swal2-footer {
            margin: .5em 0 0;
            padding: .5em 0 0;
            font-size: .8em
        }

        .swal2-popup.swal2-toast .swal2-close {
            position: static;
            width: .8em;
            height: .8em;
            line-height: .8
        }

        .swal2-popup.swal2-toast .swal2-content {
            justify-content: flex-start;
            padding: 0;
            font-size: 1em
        }

        .swal2-popup.swal2-toast .swal2-icon {
            width: 2em;
            min-width: 2em;
            height: 2em;
            margin: 0
        }

        .swal2-popup.swal2-toast .swal2-icon .swal2-icon-content {
            display: flex;
            align-items: center;
            font-size: 1.8em;
            font-weight: 700
        }

        @media all and (-ms-high-contrast:none),
        (-ms-high-contrast:active) {
            .swal2-popup.swal2-toast .swal2-icon .swal2-icon-content {
                font-size: .25em
            }
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring {
            width: 2em;
            height: 2em
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line] {
            top: .875em;
            width: 1.375em
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left] {
            left: .3125em
        }

        .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right] {
            right: .3125em
        }

        .swal2-popup.swal2-toast .swal2-actions {
            flex-basis: auto !important;
            width: auto;
            height: auto;
            margin: 0 .3125em
        }

        .swal2-popup.swal2-toast .swal2-styled {
            margin: 0 .3125em;
            padding: .3125em .625em;
            font-size: 1em
        }

        .swal2-popup.swal2-toast .swal2-styled:focus {
            box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(50, 100, 150, .4)
        }

        .swal2-popup.swal2-toast .swal2-success {
            border-color: #a5dc86
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line] {
            position: absolute;
            width: 1.6em;
            height: 3em;
            transform: rotate(45deg);
            border-radius: 50%
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=left] {
            top: -.8em;
            left: -.5em;
            transform: rotate(-45deg);
            transform-origin: 2em 2em;
            border-radius: 4em 0 0 4em
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=right] {
            top: -.25em;
            left: .9375em;
            transform-origin: 0 1.5em;
            border-radius: 0 4em 4em 0
        }

        .swal2-popup.swal2-toast .swal2-success .swal2-success-ring {
            width: 2em;
            height: 2em
        }

        .swal2-popup.swal2-toast .swal2-success .swal2-success-fix {
            top: 0;
            left: .4375em;
            width: .4375em;
            height: 2.6875em
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line] {
            height: .3125em
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=tip] {
            top: 1.125em;
            left: .1875em;
            width: .75em
        }

        .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=long] {
            top: .9375em;
            right: .1875em;
            width: 1.375em
        }

        .swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-tip {
            -webkit-animation: swal2-toast-animate-success-line-tip .75s;
            animation: swal2-toast-animate-success-line-tip .75s
        }

        .swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-long {
            -webkit-animation: swal2-toast-animate-success-line-long .75s;
            animation: swal2-toast-animate-success-line-long .75s
        }

        .swal2-popup.swal2-toast.swal2-show {
            -webkit-animation: swal2-toast-show .5s;
            animation: swal2-toast-show .5s
        }

        .swal2-popup.swal2-toast.swal2-hide {
            -webkit-animation: swal2-toast-hide .1s forwards;
            animation: swal2-toast-hide .1s forwards
        }

        .swal2-container {
            display: flex;
            position: fixed;
            z-index: 1060;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            padding: .625em;
            overflow-x: hidden;
            transition: background-color .1s;
            -webkit-overflow-scrolling: touch
        }

        .swal2-container.swal2-backdrop-show,
        .swal2-container.swal2-noanimation {
            background: rgba(0, 0, 0, .4)
        }

        .swal2-container.swal2-backdrop-hide {
            background: 0 0 !important
        }

        .swal2-container.swal2-top {
            align-items: flex-start
        }

        .swal2-container.swal2-top-left,
        .swal2-container.swal2-top-start {
            align-items: flex-start;
            justify-content: flex-start
        }

        .swal2-container.swal2-top-end,
        .swal2-container.swal2-top-right {
            align-items: flex-start;
            justify-content: flex-end
        }

        .swal2-container.swal2-center {
            align-items: center
        }

        .swal2-container.swal2-center-left,
        .swal2-container.swal2-center-start {
            align-items: center;
            justify-content: flex-start
        }

        .swal2-container.swal2-center-end,
        .swal2-container.swal2-center-right {
            align-items: center;
            justify-content: flex-end
        }

        .swal2-container.swal2-bottom {
            align-items: flex-end
        }

        .swal2-container.swal2-bottom-left,
        .swal2-container.swal2-bottom-start {
            align-items: flex-end;
            justify-content: flex-start
        }

        .swal2-container.swal2-bottom-end,
        .swal2-container.swal2-bottom-right {
            align-items: flex-end;
            justify-content: flex-end
        }

        .swal2-container.swal2-bottom-end>:first-child,
        .swal2-container.swal2-bottom-left>:first-child,
        .swal2-container.swal2-bottom-right>:first-child,
        .swal2-container.swal2-bottom-start>:first-child,
        .swal2-container.swal2-bottom>:first-child {
            margin-top: auto
        }

        .swal2-container.swal2-grow-fullscreen>.swal2-modal {
            display: flex !important;
            flex: 1;
            align-self: stretch;
            justify-content: center
        }

        .swal2-container.swal2-grow-row>.swal2-modal {
            display: flex !important;
            flex: 1;
            align-content: center;
            justify-content: center
        }

        .swal2-container.swal2-grow-column {
            flex: 1;
            flex-direction: column
        }

        .swal2-container.swal2-grow-column.swal2-bottom,
        .swal2-container.swal2-grow-column.swal2-center,
        .swal2-container.swal2-grow-column.swal2-top {
            align-items: center
        }

        .swal2-container.swal2-grow-column.swal2-bottom-left,
        .swal2-container.swal2-grow-column.swal2-bottom-start,
        .swal2-container.swal2-grow-column.swal2-center-left,
        .swal2-container.swal2-grow-column.swal2-center-start,
        .swal2-container.swal2-grow-column.swal2-top-left,
        .swal2-container.swal2-grow-column.swal2-top-start {
            align-items: flex-start
        }

        .swal2-container.swal2-grow-column.swal2-bottom-end,
        .swal2-container.swal2-grow-column.swal2-bottom-right,
        .swal2-container.swal2-grow-column.swal2-center-end,
        .swal2-container.swal2-grow-column.swal2-center-right,
        .swal2-container.swal2-grow-column.swal2-top-end,
        .swal2-container.swal2-grow-column.swal2-top-right {
            align-items: flex-end
        }

        .swal2-container.swal2-grow-column>.swal2-modal {
            display: flex !important;
            flex: 1;
            align-content: center;
            justify-content: center
        }

        .swal2-container.swal2-no-transition {
            transition: none !important
        }

        .swal2-container:not(.swal2-top):not(.swal2-top-start):not(.swal2-top-end):not(.swal2-top-left):not(.swal2-top-right):not(.swal2-center-start):not(.swal2-center-end):not(.swal2-center-left):not(.swal2-center-right):not(.swal2-bottom):not(.swal2-bottom-start):not(.swal2-bottom-end):not(.swal2-bottom-left):not(.swal2-bottom-right):not(.swal2-grow-fullscreen)>.swal2-modal {
            margin: auto
        }

        @media all and (-ms-high-contrast:none),
        (-ms-high-contrast:active) {
            .swal2-container .swal2-modal {
                margin: 0 !important
            }
        }

        .swal2-popup {
            display: none;
            position: relative;
            box-sizing: border-box;
            flex-direction: column;
            justify-content: center;
            width: 32em;
            max-width: 100%;
            padding: 1.25em;
            border: none;
            border-radius: .3125em;
            background: #fff;
            font-family: inherit;
            font-size: 1rem
        }

        .swal2-popup:focus {
            outline: 0
        }

        .swal2-popup.swal2-loading {
            overflow-y: hidden
        }

        .swal2-header {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 0 1.8em
        }

        .swal2-title {
            position: relative;
            max-width: 100%;
            margin: 0 0 .4em;
            padding: 0;
            color: #595959;
            font-size: 1em;
            font-weight: 600;
            text-align: center;
            text-transform: none;
            word-wrap: break-word
        }

        .swal2-actions {
            display: flex;
            z-index: 1;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            width: 100%;
            margin: 1.25em auto 0
        }

        .swal2-actions:not(.swal2-loading) .swal2-styled[disabled] {
            opacity: .4
        }

        .swal2-actions:not(.swal2-loading) .swal2-styled:hover {
            background-image: linear-gradient(rgba(0, 0, 0, .1), rgba(0, 0, 0, .1))
        }

        .swal2-actions:not(.swal2-loading) .swal2-styled:active {
            background-image: linear-gradient(rgba(0, 0, 0, .2), rgba(0, 0, 0, .2))
        }

        .swal2-actions.swal2-loading .swal2-styled.swal2-confirm {
            box-sizing: border-box;
            width: 2.5em;
            height: 2.5em;
            margin: .46875em;
            padding: 0;
            -webkit-animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
            animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
            border: .25em solid transparent;
            border-radius: 100%;
            border-color: transparent;
            background-color: transparent !important;
            color: transparent !important;
            cursor: default;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .swal2-actions.swal2-loading .swal2-styled.swal2-cancel {
            margin-right: 30px;
            margin-left: 30px
        }

        .swal2-actions.swal2-loading :not(.swal2-styled).swal2-confirm::after {
            content: "";
            display: inline-block;
            width: 15px;
            height: 15px;
            margin-left: 5px;
            -webkit-animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
            animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
            border: 3px solid #999;
            border-radius: 50%;
            border-right-color: transparent;
            box-shadow: 1px 1px 1px #fff
        }

        .swal2-styled {
            margin: .3125em;
            padding: .625em 2em;
            box-shadow: none;
            font-weight: 500
        }

        .swal2-styled:not([disabled]) {
            cursor: pointer
        }

        .swal2-styled.swal2-confirm {
            border: 0;
            border-radius: .25em;
            background: initial;
            background-color: #3085d6;
            color: #fff;
            font-size: 1.0625em
        }

        .swal2-styled.swal2-cancel {
            border: 0;
            border-radius: .25em;
            background: initial;
            background-color: #aaa;
            color: #fff;
            font-size: 1.0625em
        }

        .swal2-styled:focus {
            outline: 0;
            box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(50, 100, 150, .4)
        }

        .swal2-styled::-moz-focus-inner {
            border: 0
        }

        .swal2-footer {
            justify-content: center;
            margin: 1.25em 0 0;
            padding: 1em 0 0;
            border-top: 1px solid #eee;
            color: #545454;
            font-size: 1em
        }

        .swal2-timer-progress-bar-container {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            height: .25em;
            overflow: hidden;
            border-bottom-right-radius: .3125em;
            border-bottom-left-radius: .3125em
        }

        .swal2-timer-progress-bar {
            width: 100%;
            height: .25em;
            background: rgba(0, 0, 0, .2)
        }

        .swal2-image {
            max-width: 100%;
            margin: 1.25em auto
        }

        .swal2-close {
            position: absolute;
            z-index: 2;
            top: 0;
            right: 0;
            align-items: center;
            justify-content: center;
            width: 1.2em;
            height: 1.2em;
            padding: 0;
            overflow: hidden;
            transition: color .1s ease-out;
            border: none;
            border-radius: 0;
            background: 0 0;
            color: #ccc;
            font-family: serif;
            font-size: 2.5em;
            line-height: 1.2;
            cursor: pointer
        }

        .swal2-close:hover {
            transform: none;
            background: 0 0;
            color: #f27474
        }

        .swal2-close::-moz-focus-inner {
            border: 0
        }

        .swal2-content {
            z-index: 1;
            justify-content: center;
            margin: 0;
            padding: 0 1.6em;
            color: #545454;
            font-size: 1.125em;
            font-weight: 400;
            line-height: normal;
            text-align: center;
            word-wrap: break-word
        }

        .swal2-checkbox,
        .swal2-file,
        .swal2-input,
        .swal2-radio,
        .swal2-select,
        .swal2-textarea {
            margin: 1em auto
        }

        .swal2-file,
        .swal2-input,
        .swal2-textarea {
            box-sizing: border-box;
            width: 100%;
            transition: border-color .3s, box-shadow .3s;
            border: 1px solid #d9d9d9;
            border-radius: .1875em;
            background: inherit;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .06);
            color: inherit;
            font-size: 1.125em
        }

        .swal2-file.swal2-inputerror,
        .swal2-input.swal2-inputerror,
        .swal2-textarea.swal2-inputerror {
            border-color: #f27474 !important;
            box-shadow: 0 0 2px #f27474 !important
        }

        .swal2-file:focus,
        .swal2-input:focus,
        .swal2-textarea:focus {
            border: 1px solid #b4dbed;
            outline: 0;
            box-shadow: 0 0 3px #c4e6f5
        }

        .swal2-file::-moz-placeholder,
        .swal2-input::-moz-placeholder,
        .swal2-textarea::-moz-placeholder {
            color: #ccc
        }

        .swal2-file:-ms-input-placeholder,
        .swal2-input:-ms-input-placeholder,
        .swal2-textarea:-ms-input-placeholder {
            color: #ccc
        }

        .swal2-file::-ms-input-placeholder,
        .swal2-input::-ms-input-placeholder,
        .swal2-textarea::-ms-input-placeholder {
            color: #ccc
        }

        .swal2-file::placeholder,
        .swal2-input::placeholder,
        .swal2-textarea::placeholder {
            color: #ccc
        }

        .swal2-range {
            margin: 1em auto;
            background: #fff
        }

        .swal2-range input {
            width: 80%
        }

        .swal2-range output {
            width: 20%;
            color: inherit;
            font-weight: 600;
            text-align: center
        }

        .swal2-range input,
        .swal2-range output {
            height: 2.625em;
            padding: 0;
            font-size: 1.125em;
            line-height: 2.625em
        }

        .swal2-input {
            height: 2.625em;
            padding: 0 .75em
        }

        .swal2-input[type=number] {
            max-width: 10em
        }

        .swal2-file {
            background: inherit;
            font-size: 1.125em
        }

        .swal2-textarea {
            height: 6.75em;
            padding: .75em
        }

        .swal2-select {
            min-width: 50%;
            max-width: 100%;
            padding: .375em .625em;
            background: inherit;
            color: inherit;
            font-size: 1.125em
        }

        .swal2-checkbox,
        .swal2-radio {
            align-items: center;
            justify-content: center;
            background: #fff;
            color: inherit
        }

        .swal2-checkbox label,
        .swal2-radio label {
            margin: 0 .6em;
            font-size: 1.125em
        }

        .swal2-checkbox input,
        .swal2-radio input {
            margin: 0 .4em
        }

        .swal2-validation-message {
            display: none;
            align-items: center;
            justify-content: center;
            padding: .625em;
            overflow: hidden;
            background: #f0f0f0;
            color: #666;
            font-size: 1em;
            font-weight: 300
        }

        .swal2-validation-message::before {
            content: "!";
            display: inline-block;
            width: 1.5em;
            min-width: 1.5em;
            height: 1.5em;
            margin: 0 .625em;
            border-radius: 50%;
            background-color: #f27474;
            color: #fff;
            font-weight: 600;
            line-height: 1.5em;
            text-align: center
        }

        .swal2-icon {
            position: relative;
            box-sizing: content-box;
            justify-content: center;
            width: 5em;
            height: 5em;
            margin: 1.25em auto 1.875em;
            border: .25em solid transparent;
            border-radius: 50%;
            font-family: inherit;
            line-height: 5em;
            cursor: default;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .swal2-icon .swal2-icon-content {
            display: flex;
            align-items: center;
            font-size: 3.75em
        }

        .swal2-icon.swal2-error {
            border-color: #f27474;
            color: #f27474
        }

        .swal2-icon.swal2-error .swal2-x-mark {
            position: relative;
            flex-grow: 1
        }

        .swal2-icon.swal2-error [class^=swal2-x-mark-line] {
            display: block;
            position: absolute;
            top: 2.3125em;
            width: 2.9375em;
            height: .3125em;
            border-radius: .125em;
            background-color: #f27474
        }

        .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left] {
            left: 1.0625em;
            transform: rotate(45deg)
        }

        .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right] {
            right: 1em;
            transform: rotate(-45deg)
        }

        .swal2-icon.swal2-error.swal2-icon-show {
            -webkit-animation: swal2-animate-error-icon .5s;
            animation: swal2-animate-error-icon .5s
        }

        .swal2-icon.swal2-error.swal2-icon-show .swal2-x-mark {
            -webkit-animation: swal2-animate-error-x-mark .5s;
            animation: swal2-animate-error-x-mark .5s
        }

        .swal2-icon.swal2-warning {
            border-color: #facea8;
            color: #f8bb86
        }

        .swal2-icon.swal2-info {
            border-color: #9de0f6;
            color: #3fc3ee
        }

        .swal2-icon.swal2-question {
            border-color: #c9dae1;
            color: #87adbd
        }

        .swal2-icon.swal2-success {
            border-color: #a5dc86;
            color: #a5dc86
        }

        .swal2-icon.swal2-success [class^=swal2-success-circular-line] {
            position: absolute;
            width: 3.75em;
            height: 7.5em;
            transform: rotate(45deg);
            border-radius: 50%
        }

        .swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=left] {
            top: -.4375em;
            left: -2.0635em;
            transform: rotate(-45deg);
            transform-origin: 3.75em 3.75em;
            border-radius: 7.5em 0 0 7.5em
        }

        .swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=right] {
            top: -.6875em;
            left: 1.875em;
            transform: rotate(-45deg);
            transform-origin: 0 3.75em;
            border-radius: 0 7.5em 7.5em 0
        }

        .swal2-icon.swal2-success .swal2-success-ring {
            position: absolute;
            z-index: 2;
            top: -.25em;
            left: -.25em;
            box-sizing: content-box;
            width: 100%;
            height: 100%;
            border: .25em solid rgba(165, 220, 134, .3);
            border-radius: 50%
        }

        .swal2-icon.swal2-success .swal2-success-fix {
            position: absolute;
            z-index: 1;
            top: .5em;
            left: 1.625em;
            width: .4375em;
            height: 5.625em;
            transform: rotate(-45deg)
        }

        .swal2-icon.swal2-success [class^=swal2-success-line] {
            display: block;
            position: absolute;
            z-index: 2;
            height: .3125em;
            border-radius: .125em;
            background-color: #a5dc86
        }

        .swal2-icon.swal2-success [class^=swal2-success-line][class$=tip] {
            top: 2.875em;
            left: .8125em;
            width: 1.5625em;
            transform: rotate(45deg)
        }

        .swal2-icon.swal2-success [class^=swal2-success-line][class$=long] {
            top: 2.375em;
            right: .5em;
            width: 2.9375em;
            transform: rotate(-45deg)
        }

        .swal2-icon.swal2-success.swal2-icon-show .swal2-success-line-tip {
            -webkit-animation: swal2-animate-success-line-tip .75s;
            animation: swal2-animate-success-line-tip .75s
        }

        .swal2-icon.swal2-success.swal2-icon-show .swal2-success-line-long {
            -webkit-animation: swal2-animate-success-line-long .75s;
            animation: swal2-animate-success-line-long .75s
        }

        .swal2-icon.swal2-success.swal2-icon-show .swal2-success-circular-line-right {
            -webkit-animation: swal2-rotate-success-circular-line 4.25s ease-in;
            animation: swal2-rotate-success-circular-line 4.25s ease-in
        }

        .swal2-progress-steps {
            align-items: center;
            margin: 0 0 1.25em;
            padding: 0;
            background: inherit;
            font-weight: 600
        }

        .swal2-progress-steps li {
            display: inline-block;
            position: relative
        }

        .swal2-progress-steps .swal2-progress-step {
            z-index: 20;
            width: 2em;
            height: 2em;
            border-radius: 2em;
            background: #3085d6;
            color: #fff;
            line-height: 2em;
            text-align: center
        }

        .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step {
            background: #3085d6
        }

        .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step {
            background: #add8e6;
            color: #fff
        }

        .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step-line {
            background: #add8e6
        }

        .swal2-progress-steps .swal2-progress-step-line {
            z-index: 10;
            width: 2.5em;
            height: .4em;
            margin: 0 -1px;
            background: #3085d6
        }

        [class^=swal2] {
            -webkit-tap-highlight-color: transparent
        }

        .swal2-show {
            -webkit-animation: swal2-show .3s;
            animation: swal2-show .3s
        }

        .swal2-hide {
            -webkit-animation: swal2-hide .15s forwards;
            animation: swal2-hide .15s forwards
        }

        .swal2-noanimation {
            transition: none
        }

        .swal2-scrollbar-measure {
            position: absolute;
            top: -9999px;
            width: 50px;
            height: 50px;
            overflow: scroll
        }

        .swal2-rtl .swal2-close {
            right: auto;
            left: 0
        }

        .swal2-rtl .swal2-timer-progress-bar {
            right: 0;
            left: auto
        }

        @supports (-ms-accelerator:true) {
            .swal2-range input {
                width: 100% !important
            }

            .swal2-range output {
                display: none
            }
        }

        @media all and (-ms-high-contrast:none),
        (-ms-high-contrast:active) {
            .swal2-range input {
                width: 100% !important
            }

            .swal2-range output {
                display: none
            }
        }

        @-moz-document url-prefix() {
            .swal2-close:focus {
                outline: 2px solid rgba(50, 100, 150, .4)
            }
        }

        @-webkit-keyframes swal2-toast-show {
            0% {
                transform: translateY(-.625em) rotateZ(2deg)
            }

            33% {
                transform: translateY(0) rotateZ(-2deg)
            }

            66% {
                transform: translateY(.3125em) rotateZ(2deg)
            }

            100% {
                transform: translateY(0) rotateZ(0)
            }
        }

        @keyframes swal2-toast-show {
            0% {
                transform: translateY(-.625em) rotateZ(2deg)
            }

            33% {
                transform: translateY(0) rotateZ(-2deg)
            }

            66% {
                transform: translateY(.3125em) rotateZ(2deg)
            }

            100% {
                transform: translateY(0) rotateZ(0)
            }
        }

        @-webkit-keyframes swal2-toast-hide {
            100% {
                transform: rotateZ(1deg);
                opacity: 0
            }
        }

        @keyframes swal2-toast-hide {
            100% {
                transform: rotateZ(1deg);
                opacity: 0
            }
        }

        @-webkit-keyframes swal2-toast-animate-success-line-tip {
            0% {
                top: .5625em;
                left: .0625em;
                width: 0
            }

            54% {
                top: .125em;
                left: .125em;
                width: 0
            }

            70% {
                top: .625em;
                left: -.25em;
                width: 1.625em
            }

            84% {
                top: 1.0625em;
                left: .75em;
                width: .5em
            }

            100% {
                top: 1.125em;
                left: .1875em;
                width: .75em
            }
        }

        @keyframes swal2-toast-animate-success-line-tip {
            0% {
                top: .5625em;
                left: .0625em;
                width: 0
            }

            54% {
                top: .125em;
                left: .125em;
                width: 0
            }

            70% {
                top: .625em;
                left: -.25em;
                width: 1.625em
            }

            84% {
                top: 1.0625em;
                left: .75em;
                width: .5em
            }

            100% {
                top: 1.125em;
                left: .1875em;
                width: .75em
            }
        }

        @-webkit-keyframes swal2-toast-animate-success-line-long {
            0% {
                top: 1.625em;
                right: 1.375em;
                width: 0
            }

            65% {
                top: 1.25em;
                right: .9375em;
                width: 0
            }

            84% {
                top: .9375em;
                right: 0;
                width: 1.125em
            }

            100% {
                top: .9375em;
                right: .1875em;
                width: 1.375em
            }
        }

        @keyframes swal2-toast-animate-success-line-long {
            0% {
                top: 1.625em;
                right: 1.375em;
                width: 0
            }

            65% {
                top: 1.25em;
                right: .9375em;
                width: 0
            }

            84% {
                top: .9375em;
                right: 0;
                width: 1.125em
            }

            100% {
                top: .9375em;
                right: .1875em;
                width: 1.375em
            }
        }

        @-webkit-keyframes swal2-show {
            0% {
                transform: scale(.7)
            }

            45% {
                transform: scale(1.05)
            }

            80% {
                transform: scale(.95)
            }

            100% {
                transform: scale(1)
            }
        }

        @keyframes swal2-show {
            0% {
                transform: scale(.7)
            }

            45% {
                transform: scale(1.05)
            }

            80% {
                transform: scale(.95)
            }

            100% {
                transform: scale(1)
            }
        }

        @-webkit-keyframes swal2-hide {
            0% {
                transform: scale(1);
                opacity: 1
            }

            100% {
                transform: scale(.5);
                opacity: 0
            }
        }

        @keyframes swal2-hide {
            0% {
                transform: scale(1);
                opacity: 1
            }

            100% {
                transform: scale(.5);
                opacity: 0
            }
        }

        @-webkit-keyframes swal2-animate-success-line-tip {
            0% {
                top: 1.1875em;
                left: .0625em;
                width: 0
            }

            54% {
                top: 1.0625em;
                left: .125em;
                width: 0
            }

            70% {
                top: 2.1875em;
                left: -.375em;
                width: 3.125em
            }

            84% {
                top: 3em;
                left: 1.3125em;
                width: 1.0625em
            }

            100% {
                top: 2.8125em;
                left: .8125em;
                width: 1.5625em
            }
        }

        @keyframes swal2-animate-success-line-tip {
            0% {
                top: 1.1875em;
                left: .0625em;
                width: 0
            }

            54% {
                top: 1.0625em;
                left: .125em;
                width: 0
            }

            70% {
                top: 2.1875em;
                left: -.375em;
                width: 3.125em
            }

            84% {
                top: 3em;
                left: 1.3125em;
                width: 1.0625em
            }

            100% {
                top: 2.8125em;
                left: .8125em;
                width: 1.5625em
            }
        }

        @-webkit-keyframes swal2-animate-success-line-long {
            0% {
                top: 3.375em;
                right: 2.875em;
                width: 0
            }

            65% {
                top: 3.375em;
                right: 2.875em;
                width: 0
            }

            84% {
                top: 2.1875em;
                right: 0;
                width: 3.4375em
            }

            100% {
                top: 2.375em;
                right: .5em;
                width: 2.9375em
            }
        }

        @keyframes swal2-animate-success-line-long {
            0% {
                top: 3.375em;
                right: 2.875em;
                width: 0
            }

            65% {
                top: 3.375em;
                right: 2.875em;
                width: 0
            }

            84% {
                top: 2.1875em;
                right: 0;
                width: 3.4375em
            }

            100% {
                top: 2.375em;
                right: .5em;
                width: 2.9375em
            }
        }

        @-webkit-keyframes swal2-rotate-success-circular-line {
            0% {
                transform: rotate(-45deg)
            }

            5% {
                transform: rotate(-45deg)
            }

            12% {
                transform: rotate(-405deg)
            }

            100% {
                transform: rotate(-405deg)
            }
        }

        @keyframes swal2-rotate-success-circular-line {
            0% {
                transform: rotate(-45deg)
            }

            5% {
                transform: rotate(-45deg)
            }

            12% {
                transform: rotate(-405deg)
            }

            100% {
                transform: rotate(-405deg)
            }
        }

        @-webkit-keyframes swal2-animate-error-x-mark {
            0% {
                margin-top: 1.625em;
                transform: scale(.4);
                opacity: 0
            }

            50% {
                margin-top: 1.625em;
                transform: scale(.4);
                opacity: 0
            }

            80% {
                margin-top: -.375em;
                transform: scale(1.15)
            }

            100% {
                margin-top: 0;
                transform: scale(1);
                opacity: 1
            }
        }

        @keyframes swal2-animate-error-x-mark {
            0% {
                margin-top: 1.625em;
                transform: scale(.4);
                opacity: 0
            }

            50% {
                margin-top: 1.625em;
                transform: scale(.4);
                opacity: 0
            }

            80% {
                margin-top: -.375em;
                transform: scale(1.15)
            }

            100% {
                margin-top: 0;
                transform: scale(1);
                opacity: 1
            }
        }

        @-webkit-keyframes swal2-animate-error-icon {
            0% {
                transform: rotateX(100deg);
                opacity: 0
            }

            100% {
                transform: rotateX(0);
                opacity: 1
            }
        }

        @keyframes swal2-animate-error-icon {
            0% {
                transform: rotateX(100deg);
                opacity: 0
            }

            100% {
                transform: rotateX(0);
                opacity: 1
            }
        }

        @-webkit-keyframes swal2-rotate-loading {
            0% {
                transform: rotate(0)
            }

            100% {
                transform: rotate(360deg)
            }
        }

        @keyframes swal2-rotate-loading {
            0% {
                transform: rotate(0)
            }

            100% {
                transform: rotate(360deg)
            }
        }

        body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
            overflow: hidden
        }

        body.swal2-height-auto {
            height: auto !important
        }

        body.swal2-no-backdrop .swal2-container {
            top: auto;
            right: auto;
            bottom: auto;
            left: auto;
            max-width: calc(100% - .625em * 2);
            background-color: transparent !important
        }

        body.swal2-no-backdrop .swal2-container>.swal2-modal {
            box-shadow: 0 0 10px rgba(0, 0, 0, .4)
        }

        body.swal2-no-backdrop .swal2-container.swal2-top {
            top: 0;
            left: 50%;
            transform: translateX(-50%)
        }

        body.swal2-no-backdrop .swal2-container.swal2-top-left,
        body.swal2-no-backdrop .swal2-container.swal2-top-start {
            top: 0;
            left: 0
        }

        body.swal2-no-backdrop .swal2-container.swal2-top-end,
        body.swal2-no-backdrop .swal2-container.swal2-top-right {
            top: 0;
            right: 0
        }

        body.swal2-no-backdrop .swal2-container.swal2-center {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%)
        }

        body.swal2-no-backdrop .swal2-container.swal2-center-left,
        body.swal2-no-backdrop .swal2-container.swal2-center-start {
            top: 50%;
            left: 0;
            transform: translateY(-50%)
        }

        body.swal2-no-backdrop .swal2-container.swal2-center-end,
        body.swal2-no-backdrop .swal2-container.swal2-center-right {
            top: 50%;
            right: 0;
            transform: translateY(-50%)
        }

        body.swal2-no-backdrop .swal2-container.swal2-bottom {
            bottom: 0;
            left: 50%;
            transform: translateX(-50%)
        }

        body.swal2-no-backdrop .swal2-container.swal2-bottom-left,
        body.swal2-no-backdrop .swal2-container.swal2-bottom-start {
            bottom: 0;
            left: 0
        }

        body.swal2-no-backdrop .swal2-container.swal2-bottom-end,
        body.swal2-no-backdrop .swal2-container.swal2-bottom-right {
            right: 0;
            bottom: 0
        }

        @media print {
            body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
                overflow-y: scroll !important
            }

            body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown)>[aria-hidden=true] {
                display: none
            }

            body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) .swal2-container {
                position: static !important
            }
        }

        body.swal2-toast-shown .swal2-container {
            background-color: transparent
        }

        body.swal2-toast-shown .swal2-container.swal2-top {
            top: 0;
            right: auto;
            bottom: auto;
            left: 50%;
            transform: translateX(-50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-top-end,
        body.swal2-toast-shown .swal2-container.swal2-top-right {
            top: 0;
            right: 0;
            bottom: auto;
            left: auto
        }

        body.swal2-toast-shown .swal2-container.swal2-top-left,
        body.swal2-toast-shown .swal2-container.swal2-top-start {
            top: 0;
            right: auto;
            bottom: auto;
            left: 0
        }

        body.swal2-toast-shown .swal2-container.swal2-center-left,
        body.swal2-toast-shown .swal2-container.swal2-center-start {
            top: 50%;
            right: auto;
            bottom: auto;
            left: 0;
            transform: translateY(-50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-center {
            top: 50%;
            right: auto;
            bottom: auto;
            left: 50%;
            transform: translate(-50%, -50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-center-end,
        body.swal2-toast-shown .swal2-container.swal2-center-right {
            top: 50%;
            right: 0;
            bottom: auto;
            left: auto;
            transform: translateY(-50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-bottom-left,
        body.swal2-toast-shown .swal2-container.swal2-bottom-start {
            top: auto;
            right: auto;
            bottom: 0;
            left: 0
        }

        body.swal2-toast-shown .swal2-container.swal2-bottom {
            top: auto;
            right: auto;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%)
        }

        body.swal2-toast-shown .swal2-container.swal2-bottom-end,
        body.swal2-toast-shown .swal2-container.swal2-bottom-right {
            top: auto;
            right: 0;
            bottom: 0;
            left: auto
        }

        body.swal2-toast-column .swal2-toast {
            flex-direction: column;
            align-items: stretch
        }

        body.swal2-toast-column .swal2-toast .swal2-actions {
            flex: 1;
            align-self: stretch;
            height: 2.2em;
            margin-top: .3125em
        }

        body.swal2-toast-column .swal2-toast .swal2-loading {
            justify-content: center
        }

        body.swal2-toast-column .swal2-toast .swal2-input {
            height: 2em;
            margin: .3125em auto;
            font-size: 1em
        }

        body.swal2-toast-column .swal2-toast .swal2-validation-message {
            font-size: 1em
        }
    </style>
    <script async="" type="text/javascript" src="https://cdn.livechatinc.com/tracking.js"></script>
</head>

<body>


    <section class="home__slider" style="overflow:visible">
        <div class="swiper-container main-slider swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events"
            style="min-height:60px;">
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
        <div class="slider-marquee">
            <div class="header-merque">
                <div class="marquee-cont">
                    <div class="marquee-desc">
                        <i aria-hidden="true" class="v-icon notranslate fa fa-solid fa-bullhorn theme--dark"
                            style="font-size: 16px;"></i>
                        <marquee></marquee>
                    </div>
                    <div class="marquee-content">
                        <div class="marquee-date">
                            <div class="header-time" id="headerTime">Mon, January 1, 4:28:51 AM</div>
                        </div>
                    </div>
                    <div id="header-currency" class="header-flag mr-2">
                        <span>Rupiah</span>
                    </div>
                    <div id="header-lang" class="header-flag">
                        <img src="https://images.linkcdn.cloud/global/default/icon/lang/indonesia.png" alt="id">
                        <i class="fas fa-caret-down"></i>

                        <div id="lang-dropdown" class="flag-dropdown">
                            <a href="javascript:;" data-locale="en" name="locale-switch">
                                <div class="flag-item">
                                    <img src="https://images.linkcdn.cloud/global/default/icon/lang/english.png"
                                        alt="en">
                                    <span>English</span>
                                </div>
                            </a>
                            <a href="javascript:;" data-locale="id" name="locale-switch">
                                <div class="flag-item">
                                    <img src="https://images.linkcdn.cloud/global/default/icon/lang/indonesia.png"
                                        alt="id">
                                    <span>Indonesia</span>
                                </div>
                            </a>
                            <a href="javascript:;" data-locale="th" name="locale-switch">
                                <div class="flag-item">
                                    <img src="https://images.linkcdn.cloud/global/default/icon/lang/thai.png"
                                        alt="th">
                                    <span>Thailand</span>
                                </div>
                            </a>
                            <a href="javascript:;" data-locale="vn" name="locale-switch">
                                <div class="flag-item">
                                    <img src="https://images.linkcdn.cloud/global/default/icon/lang/vietnam.png"
                                        alt="vn">
                                    <span>Viet</span>
                                </div>
                            </a>
                            <a href="javascript:;" data-locale="kh" name="locale-switch">
                                <div class="flag-item">
                                    <img src="https://images.linkcdn.cloud/global/default/icon/lang/cambodia.png"
                                        alt="kh">
                                    <span>Khmer</span>
                                </div>
                            </a>
                            <a href="javascript:;" data-locale="cn" name="locale-switch">
                                <div class="flag-item">
                                    <img src="https://images.linkcdn.cloud/global/default/icon/lang/chinese.png"
                                        alt="cn">
                                    <span>Chinese</span>
                                </div>
                            </a>
                            <a href="javascript:;" data-locale="tl" name="locale-switch">
                                <div class="flag-item">
                                    <img src="https://images.linkcdn.cloud/global/default/icon/lang/philippines.png"
                                        alt="tl">
                                    <span>Tagalog</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Add Menu Modal -->
    @include('mahacuan.modal_menu')
    <!-- /Add Menu Modal -->

    <div class="header-nav">
        <div id="pageLoadingBar" class="progress-bar progress-bar-success" role="progressbar"
            style="height: 4px; width: 1%; position: absolute; z-index: 999; display: none;"></div>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <div class="nav-item">
                            <a class="nav-link" href="javascript:;" onclick="routeNav('/')">
                                <img src="https://mahacuan.live/themes/1/img/navigation/home.svg" width="80">
                                <span class="nav-link-name">
                                    Home
                                </span>
                            </a>
                        </div>
                        <div class="nav-item">
                            <a href="javascript:;" class="nav-link" onclick="routeNav('/slot')"
                                style="cursor: pointer;">
                                <img src="https://mahacuan.live/themes/1/img/navigation/slot.svg" width="80"
                                    alt="slot">
                                <span class="nav-link-name">
                                    Slot
                                </span>
                            </a>
                            <div class="nav-item__game">
                                <div class="container-fluid text-center justify-content-center">
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/fastspin')" href="javascript:;">
                                            <img title="FASTSPIN" alt="FASTSPIN"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/fsp.webp">
                                            <div class="game-name">FASTSPIN</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/pragmaticplay')" href="javascript:;">
                                            <img title="Pragmatic Play" alt="Pragmatic Play"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/pra.webp">
                                            <div class="game-name">Pragmatic Play</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/spadegaming')" href="javascript:;">
                                            <img title="Spade Gaming" alt="Spade Gaming"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/spd.webp">
                                            <div class="game-name">Spade Gaming</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="https://mahacuan.live/gameIframe?providerCode=NLS&amp;gameCode=NLS&amp;isTrial=0"
                                            target="window-play">
                                            <img title="N2Live Slot" alt="N2Live Slot"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/nli.webp">
                                            <div class="game-name">N2Live Slot</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/pgsoft')" href="javascript:;">
                                            <img title="PG Soft" alt="PG Soft"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/pgs.webp">
                                            <div class="game-name">PG Soft</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/fachai')" href="javascript:;">
                                            <img title="Fa Chai" alt="Fa Chai"
                                                src=" https://images.linkcdn.cloud/global/game-skin1/navbar/slot/fac.webp ">
                                            <div class="game-name">Fa Chai</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/jili')" href="javascript:;">
                                            <img title="JILI" alt="JILI"
                                                src=" https://images.linkcdn.cloud/global/game-skin1/navbar/slot/jli.webp ">
                                            <div class="game-name">JILI</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/redtiger')" href="javascript:;">
                                            <img title="RED TIGER" alt="RED TIGER"
                                                src=" https://images.linkcdn.cloud/global/game-skin1/navbar/slot/rtr.webp ">
                                            <div class="game-name">RED TIGER</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/afbgaming')" href="javascript:;">
                                            <img title="Afb Gaming" alt="Afb Gaming"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/afg.webp">
                                            <div class="game-name">Afb Gaming</div>

                                        </a>
                                    </div>
                                    <div class="game-item">
                                        <a href="javascript:;">
                                            <img title="AIS GAMING" alt="AIS GAMING"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/aisg.webp">
                                            <div class="game-name">AIS GAMING</div>
                                            <img title="AIS GAMING" alt="AIS GAMING" class="game-maintenance"
                                                src="https://images.linkcdn.cloud/global/nav-addons/maintenance_logo.png">
                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/hcgaming')" href="javascript:;">
                                            <img title="HC Game" alt="HC Game"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/hcg.webp">
                                            <div class="game-name">HC Game</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/advantplay')" href="javascript:;">
                                            <img title="Advantplay" alt="Advantplay"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/adv.webp">
                                            <div class="game-name">Advantplay</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/jdb')" href="javascript:;">
                                            <img title="JDB" alt="JDB"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/jdb.webp">
                                            <div class="game-name">JDB</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/nolimitcity')" href="javascript:;">
                                            <img title="NoLimit City" alt="NoLimit City"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/nlc.webp">
                                            <div class="game-name">NoLimit City</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/playstar')" href="javascript:;">
                                            <img title="Playstar" alt="Playstar"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/pls.webp">
                                            <div class="game-name">Playstar</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/joker')" href="javascript:;">
                                            <img title="Joker Gaming" alt="Joker Gaming"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/jok.webp">
                                            <div class="game-name">Joker Gaming</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/habanero')" href="javascript:;">
                                            <img title="Habanero" alt="Habanero"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/hbn.webp">
                                            <div class="game-name">Habanero</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/cq9')" href="javascript:;">
                                            <img title="CQ9 Gaming" alt="CQ9 Gaming"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/cq9.webp">
                                            <div class="game-name">CQ9 Gaming</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/virtualtech')" href="javascript:;">
                                            <img title="Virtual Tech" alt="Virtual Tech"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/vrt.webp">
                                            <div class="game-name">Virtual Tech</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/ameba')" href="javascript:;">
                                            <img title="Ameba" alt="Ameba"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/amb.webp">
                                            <div class="game-name">Ameba</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/ttg')" href="javascript:;">
                                            <img title="Top Trend Gaming" alt="Top Trend Gaming"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/ttg.webp">
                                            <div class="game-name">Top Trend Gaming</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/microgaming')" href="javascript:;">
                                            <img title="Microgaming" alt="Microgaming"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/mic.webp">
                                            <div class="game-name">Microgaming</div>

                                        </a>
                                    </div>
                                    <div class="game-item">
                                        <a href="javascript:;">
                                            <img title="Playtech Slot" alt="Playtech Slot"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/pla.webp">
                                            <div class="game-name">Playtech Slot</div>
                                            <img title="Playtech Slot" alt="Playtech Slot" class="game-maintenance"
                                                src="https://images.linkcdn.cloud/global/nav-addons/maintenance_logo.png">
                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/playngo')" href="javascript:;">
                                            <img title="Play N Go" alt="Play N Go"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/png.webp">
                                            <div class="game-name">Play N Go</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/hydako')" href="javascript:;">
                                            <img title="Hydako" alt="Hydako"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/hyd.webp">
                                            <div class="game-name">Hydako</div>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nav-item">
                            <a href="javascript:;" class="nav-link" onclick="routeNav('/livegames')"
                                style="cursor: pointer;">
                                <img src="https://images.linkcdn.cloud/global/nav-addons/hot_category.png"
                                    width="30" height="12" class="hot-tag">
                                <img src="https://mahacuan.live/themes/1/img/navigation/livegames.svg" width="80"
                                    alt="livegames">
                                <span class="nav-link-name">
                                    Live Game
                                </span>
                            </a>
                            <div class="nav-item__game">
                                <div class="container-fluid text-center justify-content-center">
                                    <div class="game-item game-item-new">
                                        <a onclick="routeNav('/livegames/livegame')" href="javascript:;">
                                            <img class="logolivegame" alt="WebsiteLogo"
                                                src="https://images.linkcdn.cloud/V2/779/logo/logo-1933674734.png">
                                            <img title="LIVE GAME" alt="LIVE GAME"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/other/lvg.webp">
                                            <div class="game-name">MAHACUAN LIVE</div>

                                            <img title="LIVE GAME" alt="LIVE GAME" class="game-new"
                                                src="https://images.linkcdn.cloud/global/nav-addons/new_icon.webp">
                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="https://mahacuan.live/gameIframe?providerCode=WS1&amp;gameCode=WS1&amp;isTrial=0"
                                            target="window-play">
                                            <img title="WS168" alt="WS168"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/other/ws1.webp">
                                            <div class="game-name">WS168</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="https://mahacuan.live/gameIframe?providerCode=MKI&amp;gameCode=MKI&amp;isTrial=0"
                                            target="window-play">
                                            <img title="MIKI Gaming" alt="MIKI Gaming"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/other/mki.webp">
                                            <div class="game-name">MIKI Gaming</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="https://mahacuan.live/gameIframe?providerCode=SV3&amp;gameCode=SV3&amp;isTrial=0"
                                            target="window-play">
                                            <img title="SV388 Cockfight" alt="SV388 Cockfight"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/other/sv3.webp">
                                            <div class="game-name">SV388 Cockfight</div>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nav-item">
                            <a href="javascript:;" class="nav-link" onclick="routeNav('/casino')"
                                style="cursor: pointer;">
                                <img src="https://mahacuan.live/themes/1/img/navigation/casino.svg" width="80"
                                    alt="casino">
                                <span class="nav-link-name">
                                    Casino
                                </span>
                            </a>
                            <div class="nav-item__game">
                                <div class="container-fluid text-center justify-content-center">
                                    <div class="game-item ">
                                        <a href="https://mahacuan.live/gameIframe?providerCode=AFC&amp;gameCode=AFC&amp;isTrial=0"
                                            target="window-play">
                                            <img title="AFB CASINO" alt="AFB CASINO"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/casino/afc.webp">
                                            <div class="game-name">AFB CASINO</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="https://mahacuan.live/gameIframe?providerCode=PLC&amp;gameCode=PLC&amp;isTrial=0"
                                            target="window-play">
                                            <img title="Pragmatic Play LC" alt="Pragmatic Play LC"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/casino/plc.webp">
                                            <div class="game-name">Pragmatic Play LC</div>

                                        </a>
                                    </div>
                                    <div class="game-item game-item-new">
                                        <a href="https://mahacuan.live/gameIframe?providerCode=WEC&amp;gameCode=WEC&amp;isTrial=0"
                                            target="window-play">
                                            <img title="WE CASINO" alt="WE CASINO"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/casino/wec.webp">
                                            <div class="game-name">WE CASINO</div>

                                            <img title="WE CASINO" alt="WE CASINO" class="game-new"
                                                src="https://images.linkcdn.cloud/global/nav-addons/new_icon.webp">
                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="https://mahacuan.live/gameIframe?providerCode=GD8&amp;gameCode=GD8&amp;isTrial=0"
                                            target="window-play">
                                            <img title="GD88" alt="GD88"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/casino/gd8.webp">
                                            <div class="game-name">GD88</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="https://mahacuan.live/gameIframe?providerCode=WMC&amp;gameCode=WMC&amp;isTrial=0"
                                            target="window-play">
                                            <img title="WM Casino" alt="WM Casino"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/casino/wmc.webp">
                                            <div class="game-name">WM Casino</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="https://mahacuan.live/gameIframe?providerCode=ORI&amp;gameCode=ORI&amp;isTrial=0"
                                            target="window-play">
                                            <img title="OG Casino" alt="OG Casino"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/casino/ogs.webp">
                                            <div class="game-name">OG Casino</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="https://mahacuan.live/gameIframe?providerCode=EVO&amp;gameCode=EVO&amp;isTrial=0"
                                            target="window-play">
                                            <img title="Evolution" alt="Evolution"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/casino/evo.webp">
                                            <div class="game-name">Evolution</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="https://mahacuan.live/gameIframe?providerCode=ALB&amp;gameCode=ALB&amp;isTrial=0"
                                            target="window-play">
                                            <img title="ALLBET" alt="ALLBET"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/casino/alb.webp">
                                            <div class="game-name">ALLBET</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="https://mahacuan.live/gameIframe?providerCode=DRG&amp;gameCode=DRG&amp;isTrial=0"
                                            target="window-play">
                                            <img title="Dream Gaming" alt="Dream Gaming"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/casino/drg.webp">
                                            <div class="game-name">Dream Gaming</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="https://mahacuan.live/gameIframe?providerCode=AGC&amp;gameCode=AGC&amp;isTrial=0"
                                            target="window-play">
                                            <img title="Asia Gaming" alt="Asia Gaming"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/casino/agc.webp">
                                            <div class="game-name">Asia Gaming</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="https://mahacuan.live/gameIframe?providerCode=SEG&amp;gameCode=SEG&amp;isTrial=0"
                                            target="window-play">
                                            <img title="Sexy Gaming" alt="Sexy Gaming"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/casino/seg.webp">
                                            <div class="game-name">Sexy Gaming</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="https://mahacuan.live/gameIframe?providerCode=LG8&amp;gameCode=LG8&amp;isTrial=0"
                                            target="window-play">
                                            <img title="LG88" alt="LG88"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/casino/lg8.webp">
                                            <div class="game-name">LG88</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="https://mahacuan.live/gameIframe?providerCode=NLI&amp;gameCode=NLI&amp;isTrial=0"
                                            target="window-play">
                                            <img title="N2Live" alt="N2Live"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/casino/nli.webp">
                                            <div class="game-name">N2Live</div>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nav-item">
                            <a href="javascript:;" class="nav-link" onclick="routeNav('/sportsbook')"
                                style="cursor: pointer;">
                                <img src="https://mahacuan.live/themes/1/img/navigation/sport.svg" width="80"
                                    alt="sport">
                                <span class="nav-link-name">
                                    Sportsbook
                                </span>
                            </a>
                            <div class="nav-item__game">
                                <div class="container-fluid text-center justify-content-center">
                                    <div class="game-item ">
                                        <a href="https://mahacuan.live/gameIframe?providerCode=AFB&amp;gameCode=AFB&amp;isTrial=0"
                                            target="window-play">
                                            <img title="AFB88" alt="AFB88"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/sportbook/afb88.webp">
                                            <div class="game-name">AFB88</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="https://mahacuan.live/gameIframe?providerCode=IAE&amp;gameCode=IAE&amp;isTrial=0"
                                            target="window-play">
                                            <img title="IA E-SPORT" alt="IA E-SPORT"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/sportbook/iae.webp">
                                            <div class="game-name">IA E-SPORT</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="https://mahacuan.live/gameIframe?providerCode=SBO&amp;gameCode=SBO&amp;isTrial=0"
                                            target="window-play">
                                            <img title="SBO SPORT" alt="SBO SPORT"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/sportbook/sbobet.webp">
                                            <div class="game-name">SBO SPORT</div>

                                        </a>
                                    </div>
                                    <div class="game-item">
                                        <a href="javascript:;">
                                            <img title="CMD368" alt="CMD368"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/sportbook/cmd368.webp">
                                            <div class="game-name">CMD368</div>
                                            <img title="CMD368" alt="CMD368" class="game-maintenance"
                                                src="https://images.linkcdn.cloud/global/nav-addons/maintenance_logo.png">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nav-item">
                            <a href="javascript:;" class="nav-link" onclick="routeNav('/lottery')"
                                style="cursor: pointer;">
                                <img src="https://mahacuan.live/themes/1/img/navigation/lottery.svg" width="80"
                                    alt="lottery">
                                <span class="nav-link-name">
                                    Lottery
                                </span>
                            </a>
                            <div class="nav-item__game">
                                <div class="container-fluid text-center justify-content-center">
                                    <div class="game-item ">
                                        <a onclick="routeNav('/lottery/4d')" href="javascript:;">
                                            <img title="4D" alt="4D"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/lottery/tog.webp">
                                            <div class="game-name">4D</div>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nav-item">
                            <a href="javascript:;" class="nav-link" onclick="routeNav('/arcade')"
                                style="cursor: pointer;">
                                <img src="https://mahacuan.live/themes/1/img/navigation/arcade.svg" width="80"
                                    alt="arcade">
                                <span class="nav-link-name">
                                    Arcade
                                </span>
                            </a>
                            <div class="nav-item__game">
                                <div class="container-fluid text-center justify-content-center">
                                    <div class="game-item ">
                                        <a href="https://mahacuan.live/gameIframe?providerCode=PLC&amp;gameCode=1302&amp;isTrial=0"
                                            target="window-play">
                                            <img title="Spaceman" alt="Spaceman"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/other/spa.webp">
                                            <div class="game-name">Spaceman</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/arcade/joker')" href="javascript:;">
                                            <img title="Joker Gaming" alt="Joker Gaming"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/fishing/jok.webp">
                                            <div class="game-name">Joker Gaming</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/arcade/spade')" href="javascript:;">
                                            <img title="Spade Gaming" alt="Spade Gaming"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/fishing/spd.webp">
                                            <div class="game-name">Spade Gaming</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/arcade/playstar')" href="javascript:;">
                                            <img title="Playstar" alt="Playstar"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/fishing/pls.webp">
                                            <div class="game-name">Playstar</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/arcade/cq9')" href="javascript:;">
                                            <img title="CQ9" alt="CQ9"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/fishing/cq9.webp">
                                            <div class="game-name">CQ9</div>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nav-item">
                            <a class="nav-link" href="javascript:;" onclick="routeNav('/news')">
                                <img src="https://mahacuan.live/themes/1/img/navigation/news.svg" width="80">
                                <span class="nav-link-name">
                                    Berita
                                </span>
                            </a>
                        </div>
                        <div class="nav-item">
                            <a class="nav-link" href="javascript:;" onclick="routeNav('/promotion')">
                                <img src="https://mahacuan.live/themes/1/img/navigation/promotion.svg" width="80">
                                <span class="nav-link-name">
                                    Promosi
                                </span>
                            </a>
                        </div>
                        <div class="nav-item">
                            <a class="nav-link" href="https://mahacuan.live/event">
                                <img src="https://mahacuan.live/themes/1/img/navigation/event.svg" width="80">
                                <span class="nav-link-name">
                                    Event
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="header-mobile">
        <div class="header-mobile__top">
            <div class="mobile-logo">
                <a href="https://mahacuan.live">
                    <img src="https://images.linkcdn.cloud/V2/779/logo/logo-1933674734.png" alt="WebsiteLogo"
                        width="125" height="27">
                </a>
            </div>
            <div class="mobile-button">
                <div class="badge">
                    <a href="#" class="text-white" name="refreshWallet"><span><i
                                class="fa fa-sync"></i></span></a>
                </div>
                <div class="mobile-button--transaksi" href="#" data-toggle="modal"
                    data-target="#accountBalance">
                    <i class="fas fa-coins m-auto"></i> IDR
                    <a class="wallet-amount" id="wallet-amount"><span name="mainBalance">0.00</span></a>
                </div>
                <div data-target="slide-out" class="mobile-button--menu sidenav-toggle">
                    <i class="fas fa-bars m-auto"></i>
                </div>
            </div>
        </div>
        <div class="header-mobile__marquee">
            <i class="fas fa-bullhorn"></i>
            <marquee class="marquee"></marquee>
        </div>
        <div id="mobilePageLoadingBar" class="progress-bar progress-bar-success" role="progressbar"
            style="height:4px;width:1%;position:absolute;z-index:999;display:none;"></div>
    </div>
    <div id="overlay"></div>
    <div class="sidenav">

        <div class="sidenav__header">
            <div class="header-top">
                <div class="header-time" id="headerTime"></div>
                <div class="flags show-popup-language" data-toggle="modal" data-target="#languageModal">
                    <span>Indonesia</span>
                    <img src="https://images.linkcdn.cloud/global/default/icon/lang/indonesia.png" alt="id">
                </div>
            </div>
            <div class="header-user">
                <span>Selamat Datang</span>
                <span class="account-username">
                    <img src="https://mahacuan.live/themes/1/img/user-status/New Player.svg" alt="">
                    <a href="https://mahacuan.live/profile">okesiap1</a>
                </span>
            </div>
        </div>


        <div class="sidenav__menu">
            <div class="menu-list">
                <a class="show-game-category" href="#" data-toggle="modal" data-target="#categoryProvModal">
                    <div class="list-item">
                        <img src="https://mahacuan.live/themes/1/img/navigation/game.svg" width="60"
                            height="60">
                        <div class="menu-title">Permainan</div>
                    </div>
                </a>
                <a href="https://mahacuan.live/memo">
                    <div class="list-item active">
                        <img src="https://mahacuan.live/themes/1/img/navigation/memo.svg" width="60"
                            height="60">
                        <div class="menu-title">Memo<span>[0]</span></div>
                    </div>
                </a>
                <a href="https://mahacuan.live/profile">
                    <div class="list-item ">
                        <img src="https://mahacuan.live/themes/1/img/navigation/login.svg" width="60"
                            height="60">
                        <div class="menu-title">Akun Saya</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="sidenav__header">
            <div class="header-user">
                <span>Transaksi</span>
            </div>
        </div>
        <div class="sidenav__menu">
            <div class="menu-list">
                <a href="https://mahacuan.live/transaction#deposit">
                    <div class="list-item ">
                        <img src="https://mahacuan.live/themes/1/img/navigation/deposit1.svg" width="60"
                            height="60">
                        <div class="menu-title">Deposit</div>
                    </div>
                </a>
                <a href="https://mahacuan.live/transaction#claim">
                    <div class="list-item ">
                        <img src="https://mahacuan.live/themes/1/img/navigation/claim-bonus.svg" width="60"
                            height="60">
                        <div class="menu-title">Klaim</div>
                    </div>
                </a>
                <a href="https://mahacuan.live/transaction#withdraw">
                    <div class="list-item ">
                        <img src="https://mahacuan.live/themes/1/img/navigation/withdraw.svg" width="60"
                            height="60">
                        <div class="menu-title">Tarik Dana</div>
                    </div>
                </a>
                <a name="bonusSidebar" id="promoSidebar" href="https://mahacuan.live/bonus#promo">
                    <div class="list-item ">
                        <img src="https://mahacuan.live/themes/1/img/navigation/promotion.svg" width="60"
                            height="60">
                        <div class="menu-title">Promo</div>
                    </div>
                </a>
                <a name="bonusSidebar" id="referralSidebar" href="https://mahacuan.live/bonus#referral">
                    <div class="list-item ">
                        <img src="https://mahacuan.live/themes/1/img/navigation/referal.svg" width="60"
                            height="60">
                        <div class="menu-title">Refferal</div>
                    </div>
                </a>
                <a name="bonusSidebar" id="rebateSidebar" href="https://mahacuan.live/bonus#rebate">
                    <div class="list-item ">
                        <img src="https://mahacuan.live/themes/1/img/navigation/rebate.svg" width="60"
                            height="60">
                        <div class="menu-title">Rebate</div>
                    </div>
                </a>
                <a href="#" class="voucher-button sidenav-voucher" data-toggle="modal"
                    data-target="#voucherModal">
                    <div class="list-item">
                        <img src="https://mahacuan.live/themes/1/img/navigation/voucher.svg" width="60"
                            height="60">
                        <div class="menu-title">Voucher</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="sidenav__header">
            <div class="header-user">
                <span>Konten</span>
            </div>
        </div>
        <div class="sidenav__menu">
            <div class="menu-list">
                <a href="javascript:;" onclick="routeNav('/promotion')">
                    <div class="list-item  ">
                        <img src="https://mahacuan.live/themes/1/img/navigation/promo.svg" width="60"
                            height="60">
                        <div class="menu-title">Promosi</div>
                    </div>
                </a>
                <a href="javascript:;" onclick="routeNav('/news')">
                    <div class="list-item ">
                        <img src="https://mahacuan.live/themes/1/img/navigation/news.svg" width="60"
                            height="60">
                        <div class="menu-title">Berita</div>
                    </div>
                </a>
                <a href="https://mahacuan.live/help">
                    <div class="list-item ">
                        <img src="https://mahacuan.live/themes/1/img/navigation/help.svg" width="60"
                            height="60">
                        <div class="menu-title">Bantuan</div>
                    </div>
                </a>
                <a href="/contact">
                    <div class="list-item ">
                        <img src="https://mahacuan.live/themes/1/img/navigation/contactus.svg" width="60"
                            height="60">
                        <div class="menu-title">Kontak Kami</div>
                    </div>
                </a>
                <a href="https://mahacuan.live/feedback">
                    <div class="list-item ">
                        <img src="https://mahacuan.live/themes/1/img/navigation/feedback.svg" width="60"
                            height="60">
                        <div class="menu-title">Laporan ke Pusat</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="sidenav__menu" style="padding-top: 150px">
            <div class="menu-logout">
                <a href="https://mahacuan.live/member/logout">
                    <div class="list-item">
                        <img src="https://mahacuan.live/themes/1/img/navigation/logout.svg" width="60"
                            height="60">
                        <div class="menu-title">Keluar</div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="modal fade custom-popup" id="languageModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>

                <div class="language-header">
                    <h3>Region and Language</h3>
                    <div class="header-flag">
                        <img src="https://images.linkcdn.cloud/global/default/icon/lang/indonesia.png" alt="id">
                        <h6>Indonesia</h6>
                    </div>
                </div>

                <div class="modal-body">
                    <div class="language-list">
                        <a href="javascript:;" data-locale="en" name="locale-switch">
                            <div class="list-item">
                                <div class="item-flag">
                                    <img src="https://images.linkcdn.cloud/global/default/icon/lang/english.png"
                                        alt="en">
                                </div>
                                <div class="item-content">
                                    <h6><small>en</small></h6>
                                    <h5>English</h5>
                                </div>
                            </div>
                        </a>
                        <a href="javascript:;" data-locale="id" name="locale-switch">
                            <div class="list-item">
                                <div class="item-flag">
                                    <img src="https://images.linkcdn.cloud/global/default/icon/lang/indonesia.png"
                                        alt="id">
                                </div>
                                <div class="item-content">
                                    <h6><small>id</small></h6>
                                    <h5>Indonesia</h5>
                                </div>
                            </div>
                        </a>
                        <a href="javascript:;" data-locale="th" name="locale-switch">
                            <div class="list-item">
                                <div class="item-flag">
                                    <img src="https://images.linkcdn.cloud/global/default/icon/lang/thai.png"
                                        alt="th">
                                </div>
                                <div class="item-content">
                                    <h6><small>th</small></h6>
                                    <h5>Thailand</h5>
                                </div>
                            </div>
                        </a>
                        <a href="javascript:;" data-locale="vn" name="locale-switch">
                            <div class="list-item">
                                <div class="item-flag">
                                    <img src="https://images.linkcdn.cloud/global/default/icon/lang/vietnam.png"
                                        alt="vn">
                                </div>
                                <div class="item-content">
                                    <h6><small>vn</small></h6>
                                    <h5>Viet</h5>
                                </div>
                            </div>
                        </a>
                        <a href="javascript:;" data-locale="kh" name="locale-switch">
                            <div class="list-item">
                                <div class="item-flag">
                                    <img src="https://images.linkcdn.cloud/global/default/icon/lang/cambodia.png"
                                        alt="kh">
                                </div>
                                <div class="item-content">
                                    <h6><small>kh</small></h6>
                                    <h5>Khmer</h5>
                                </div>
                            </div>
                        </a>
                        <a href="javascript:;" data-locale="cn" name="locale-switch">
                            <div class="list-item">
                                <div class="item-flag">
                                    <img src="https://images.linkcdn.cloud/global/default/icon/lang/chinese.png"
                                        alt="cn">
                                </div>
                                <div class="item-content">
                                    <h6><small>cn</small></h6>
                                    <h5>Chinese</h5>
                                </div>
                            </div>
                        </a>
                        <a href="javascript:;" data-locale="tl" name="locale-switch">
                            <div class="list-item">
                                <div class="item-flag">
                                    <img src="https://images.linkcdn.cloud/global/default/icon/lang/philippines.png"
                                        alt="tl">
                                </div>
                                <div class="item-content">
                                    <h6><small>tl</small></h6>
                                    <h5>Tagalog</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://mahacuan.live/themes/1/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
        let loginEl = document.getElementById('login-widget');

        window.addEventListener('scroll', (event) => {
            var currentScroll = document.documentElement.scrollTop;

            // let loginEl = document.getElementById('login-widget');

            if (currentScroll >= 150) {
                loginEl.classList.add('minimized');
            } else if (currentScroll <= 100) {
                $('#login-widget').removeClass('minimized');
                $(".icon-minimize").click()
            }
        });

        var inputUsername = document.getElementById('username')

        $('#usernameInput').on('focus', function() {
            $('#login-widget').removeClass('minimized')
        })

        $('#passwordInput').on('focus', function() {
            $('#login-widget').removeClass('minimized')
        })

        $('.widget-form__member').hover(function() {
            $('#login-widget').removeClass('minimized')
        })

        $('.widget-form__logo').hover(function() {
            $('#login-widget').removeClass('minimized')
        })
    </script>


    <!-- Account Balance -->
    <div class="modal custom-popup fade" id="accountBalance" tabindex="-1" aria-labelledby="accountBalanceLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
                <div class="modal-body">
                    <div class="popup-account-balance">
                        <div class="balance-header">
                            <h6>DOMPET</h6>
                            <div class="acc-balance"><span name="mainBalance">0.00</span></div>
                        </div>
                        <div class="balance-category d-flex align-items-center">
                            <div class="category-name m-0">DOMPET UTAMA</div>
                            <div class="acc-balance ml-auto"><span id="balance-common-total">0.00</span></div>
                        </div>
                        <div class="balance-category d-flex align-items-center">
                            <div class="category-name m-0">DOMPET POKER</div>
                            <div class="acc-balance ml-auto"><span id="balance-poker-total">0.00</span></div>
                        </div>
                        <div class="balance-category">
                            <div class="category-name">SLOT</div>
                            <div class="provider-list">
                                <div class="prov-item">
                                    <div class="prov-title">FASTSPIN</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInFSP" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutFSP" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedFSP" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-FSP">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">Pragmatic Play</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInPRA" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutPRA" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedPRA" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-PRA">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">Spade Gaming</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInSPD" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutSPD" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedSPD" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-SPD">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">N2Live Slot</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInNLS" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutNLS" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedNLS" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-NLS">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">PG Soft</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInPGS" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutPGS" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedPGS" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-PGS">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">Fa Chai</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInFAC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutFAC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedFAC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-FAC">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">JILI</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInJLI" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutJLI" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedJLI" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-JLI">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">RED TIGER</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInRED" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutRED" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedRED" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-RED">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">Afb Gaming</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInAFG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutAFG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedAFG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-AFG">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">AIS GAMING</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInAIS" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutAIS" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedAIS" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-AIS">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">HC Game</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInHCG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutHCG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedHCG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-HCG">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">Advantplay</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInADV" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutADV" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedADV" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-ADV">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">JDB</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInJDB" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutJDB" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedJDB" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-JDB">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">NoLimit City</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInNLC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutNLC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedNLC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-NLC">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">Playstar</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInPLS" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutPLS" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedPLS" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-PLS">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">Joker Gaming</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInJOK" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutJOK" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedJOK" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-JOK">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">Habanero</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInHBN" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutHBN" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedHBN" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-HBN">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">CQ9 Gaming</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInCQ9" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutCQ9" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedCQ9" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-CQ9">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">Virtual Tech</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInVRT" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutVRT" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedVRT" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-VRT">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">Ameba</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInAMB" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutAMB" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedAMB" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-AMB">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">Top Trend Gaming</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInTTG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutTTG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedTTG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-TTG">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">Microgaming</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInMIC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutMIC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedMIC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-MIC">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">Playtech Slot</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInPLA" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutPLA" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedPLA" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-PLA">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">Play N Go</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInPNG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutPNG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedPNG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-PNG">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">Hydako</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInHYD" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutHYD" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedHYD" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-HYD">0.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="balance-category">
                            <div class="category-name">LIVEGAMES</div>
                            <div class="provider-list">
                                <div class="prov-item">
                                    <div class="prov-title">LIVE GAME</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInLVG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutLVG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedLVG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-LVG">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">WS168</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInWS1" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutWS1" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedWS1" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-WS1">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">MIKI Gaming</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInMKI" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutMKI" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedMKI" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-MKI">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">SV388 Cockfight</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInSV3" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutSV3" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedSV3" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-SV3">0.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="balance-category">
                            <div class="category-name">CASINO</div>
                            <div class="provider-list">
                                <div class="prov-item">
                                    <div class="prov-title">AFB CASINO</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInAFC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutAFC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedAFC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-AFC">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">Pragmatic Play LC</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInPLC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutPLC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedPLC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-PLC">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">WE CASINO</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInWEC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutWEC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedWEC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-WEC">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">GD88</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInGD8" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutGD8" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedGD8" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-GD8">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">WM Casino</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInWMC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutWMC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedWMC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-WMC">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">OG Casino</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInORI" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutORI" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedORI" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-ORI">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">Evolution</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInEVO" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutEVO" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedEVO" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-EVO">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">ALLBET</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInALB" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutALB" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedALB" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-ALB">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">Dream Gaming</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInDRG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutDRG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedDRG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-DRG">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">Asia Gaming</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInAGC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutAGC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedAGC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-AGC">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">Sexy Gaming</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInSEG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutSEG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedSEG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-SEG">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">LG88</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInLG8" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutLG8" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedLG8" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-LG8">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">N2Live</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInNLI" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutNLI" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedNLI" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-NLI">0.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="balance-category">
                            <div class="category-name">SPORT</div>
                            <div class="provider-list">
                                <div class="prov-item">
                                    <div class="prov-title">AFB88</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInAFB" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutAFB" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedAFB" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-AFB">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">IA E-SPORT</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInIAE" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutIAE" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedIAE" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-IAE">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">SBO SPORT</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInSBO" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutSBO" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedSBO" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-SBO">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">CMD368</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInCMD" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutCMD" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedCMD" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-CMD">0.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="balance-category">
                            <div class="category-name">LOTTERY</div>
                            <div class="provider-list">
                                <div class="prov-item">
                                    <div class="prov-title">4D</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInTOG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutTOG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedTOG" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-TOG">0.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="balance-category">
                            <div class="category-name">ARCADE</div>
                            <div class="provider-list">
                                <div class="prov-item">
                                    <div class="prov-title">Spaceman</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInPLC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutPLC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedPLC" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-PLC">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">Joker Gaming</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInJOK" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutJOK" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedJOK" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-JOK">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">Spade Gaming</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInSPD" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutSPD" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedSPD" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-SPD">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">Playstar</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInPLS" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutPLS" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedPLS" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-PLS">0.00</span>
                                    </div>
                                </div>
                                <div class="prov-item">
                                    <div class="prov-title">CQ9</div>
                                    <div class="prov-balance d-flex align-items-center">
                                        <div style="display: none;" id="lockedInCQ9" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked In</b> <p><em>Anda tidak diperbolehkan MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-right text-success"></i>
                                        </div>
                                        <div style="display: none;" id="lockedOutCQ9" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked Out</b> <p><em>Anda tidak diperbolehkan MENGIRIM transfer ke dompet manapun.</em></p>">
                                            <i class="fas fa-lock"></i>
                                            <i class="fas fa-caret-left text-danger"></i>
                                        </div>
                                        <div style="display: none;" id="lockedCQ9" data-toggle="tooltip"
                                            data-html="true" title=""
                                            data-original-title="<b>Locked!!!</b> <p><em>Anda tidak diperbolehkan MENGIRIM ataupun MENERIMA transfer dari dompet manapun.</em></p>">
                                            <i class="fas fa-lock text-danger"></i>
                                        </div>
                                        <span class="ml-2" name="provBalance" id="balance-CQ9">0.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="balance-button">
                    <a href="https://mahacuan.live/transaction#deposit" id="depositModal" type="button"
                        class="btn-custom">Tambah Dana</a>
                    <a href="https://mahacuan.live/transaction#withdraw" id="withdrawModal" type="button"
                        class="btn-custom">Tarik Dana</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Redeem Voucher -->
    <div class="modal custom-popup fade" id="voucherModal" tabindex="-1" aria-labelledby="voucherLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
                <div class="modal-body">
                    <div class="popup-voucher">
                        <div class="voucher-header">
                            <h4>Tukar Voucher</h4>
                        </div>
                        <div class="voucher-label">Kode Voucher</div>
                        <div class="voucher-details">
                            <div class="voucher-details-input">
                                <input class="form-control form-control-sm" id="voucher_code"
                                    placeholder="Masukkan kode voucher anda" type="text">
                            </div>
                            <div class="voucher-details-scan">
                                <button class="btn-custom-sm"><i class="fas fa-qrcode"></i></button>
                                <input type="file" id="qr-input-file" accept="image/*">
                            </div>
                        </div>
                        <div class="text-center my-3" id="error-message"></div>
                        <div id="reader"></div>
                        <div class="voucher-button">
                            <button class="btn-custom-sm" id="submitVoucher">Kirim/Tukarkan Kode</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main id="main-route">
        <div class="main-content memo">
            <div class="container">
                <div class="memo__container">
                    <ul class="component-tabs nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-item nav-link active mr-0" id="nav-broadcast-tab" data-toggle="tab"
                                href="#nav-broadcast" role="tab" aria-controls="nav-broadcast"
                                aria-selected="false">
                                <img src="https://mahacuan.live/themes/1/img/navigation/memo.svg" width="40"
                                    height="40">
                                <span>Pengumuman</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-item nav-link mr-0" id="nav-all-tab" data-toggle="tab" href="#nav-all"
                                role="tab" aria-controls="nav-all" aria-selected="false">
                                <img src="https://mahacuan.live/themes/1/img/navigation/addmemo.svg" width="40"
                                    height="40">
                                <span>Memo Anda</span>
                            </a>
                        </li>
                        <li hidden="" class="nav-item">
                            <a class="nav-item nav-link" id="nav-add-memo-tab" data-toggle="tab"
                                href="#nav-add-memo" role="tab" aria-controls="nav-add-memo"
                                aria-selected="false">
                            </a>
                        </li>
                        <li hidden="" class="nav-item">
                            <a class="nav-item nav-link" id="nav-detail-tab" data-toggle="tab"
                                href="#nav-detail" role="tab" aria-controls="nav-detail"
                                aria-selected="false">
                            </a>
                        </li>
                    </ul>
                    <div class="component-tab-content tab-content">
                        <div class="tab-pane fade show active" id="nav-broadcast" role="tabpanel"
                            aria-labelledby="nav-broadcast-tab">
                            <div class="memo-broadcast">
                                <div class="container-fluid table-dataTable">
                                    <div id="memo-broadcast-table_wrapper" class="dataTables_wrapper no-footer">
                                        <div class="dataTables_length" id="memo-broadcast-table_length"><label>Show
                                                <select name="memo-broadcast-table_length"
                                                    aria-controls="memo-broadcast-table" class="">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select> entries</label></div>
                                        <div id="memo-broadcast-table_filter" class="dataTables_filter">
                                            <label>Search:<input type="search" class="" placeholder=""
                                                    aria-controls="memo-broadcast-table"></label></div>
                                        <table id="memo-broadcast-table"
                                            class="table table-hover table-bordered dataTable no-footer"
                                            role="grid" aria-describedby="memo-broadcast-table_info"
                                            style="width: 1038px;">
                                            <thead>
                                                <tr role="row">
                                                    <th scope="col" class="text-left sorting_desc"
                                                        tabindex="0" aria-controls="memo-broadcast-table"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Tanggal: activate to sort column ascending"
                                                        aria-sort="descending" style="width: 365px;">Tanggal</th>
                                                    <th scope="col" class="text-left sorting" tabindex="0"
                                                        aria-controls="memo-broadcast-table" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Type: activate to sort column ascending"
                                                        style="width: 256px;">Type</th>
                                                    <th scope="col" class="text-left sorting" tabindex="0"
                                                        aria-controls="memo-broadcast-table" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Subject: activate to sort column ascending"
                                                        style="width: 363px;">Subject</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="odd">
                                                    <td valign="top" colspan="3" class="dataTables_empty">No
                                                        data available in table</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dataTables_info" id="memo-broadcast-table_info" role="status"
                                            aria-live="polite">Showing 0 to 0 of 0 entries</div>
                                        <div class="dataTables_paginate paging_simple_numbers"
                                            id="memo-broadcast-table_paginate"><a
                                                class="paginate_button previous disabled"
                                                aria-controls="memo-broadcast-table" data-dt-idx="0"
                                                tabindex="-1"
                                                id="memo-broadcast-table_previous">Previous</a><span></span><a
                                                class="paginate_button next disabled"
                                                aria-controls="memo-broadcast-table" data-dt-idx="1"
                                                tabindex="-1" id="memo-broadcast-table_next">Next</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="nav-all" role="tabpanel"
                            aria-labelledby="nav-all-tab">
                            <div class="memo-all">
                                <div class="d-flex">
                                    <a class="btn-custom ml-auto" href="#" id="addMemoButton">
                                        <i class="fas fa-file-signature"></i>
                                        <span>Tambahkan Memo</span>
                                    </a>
                                </div>
                                <div class="container-fluid table-dataTable">
                                    <div id="memo-table_wrapper" class="dataTables_wrapper no-footer">
                                        <div class="dataTables_length" id="memo-table_length"><label>Show <select
                                                    name="memo-table_length" aria-controls="memo-table"
                                                    class="">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select> entries</label></div>
                                        <div id="memo-table_filter" class="dataTables_filter"><label>Search:<input
                                                    type="search" class="" placeholder=""
                                                    aria-controls="memo-table"></label></div>
                                        <table id="memo-table"
                                            class="table table-hover table-bordered dataTable no-footer"
                                            role="grid" aria-describedby="memo-table_info">
                                            <thead>
                                                <tr role="row">
                                                    <th scope="col" class="text-left sorting_asc"
                                                        rowspan="1" colspan="1" aria-label="Tanggal">Tanggal
                                                    </th>
                                                    <th scope="col" class="text-left sorting" tabindex="0"
                                                        aria-controls="memo-table" rowspan="1" colspan="1"
                                                        aria-label="Type: activate to sort column ascending">Type</th>
                                                    <th scope="col" class="text-left sorting" tabindex="0"
                                                        aria-controls="memo-table" rowspan="1" colspan="1"
                                                        aria-label="Subject: activate to sort column ascending">
                                                        Subject</th>
                                                    <th scope="col" class="text-center sorting" tabindex="0"
                                                        aria-controls="memo-table" rowspan="1" colspan="1"
                                                        aria-label="Status: activate to sort column ascending">Status
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="odd">
                                                    <td valign="top" colspan="4" class="dataTables_empty">No
                                                        data available in table</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dataTables_info" id="memo-table_info" role="status"
                                            aria-live="polite">Showing 0 to 0 of 0 entries</div>
                                        <div class="dataTables_paginate paging_simple_numbers"
                                            id="memo-table_paginate"><a class="paginate_button previous disabled"
                                                aria-controls="memo-table" data-dt-idx="0" tabindex="-1"
                                                id="memo-table_previous">Previous</a><span></span><a
                                                class="paginate_button next disabled" aria-controls="memo-table"
                                                data-dt-idx="1" tabindex="-1" id="memo-table_next">Next</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-detail" role="tabpanel"
                            aria-labelledby="nav-detail-tab">
                            <div class="memo-view pt-0">
                                <div class="memo-view__container">
                                    <a href="javascript:;" onclick="$('#nav-all-tab').click()"
                                        class="view-back btn-custom"><i class="fas fa-angle-left"></i> Kembali</a>
                                    <div class="memo-view-form">
                                        <div class="memo-view-content">
                                            <div class="content-subject"></div>
                                            <div class="content-desc"></div>
                                        </div>
                                        <div id="memoViewReply"></div>
                                        <form id="memoReplyForm" novalidate="novalidate">
                                            <div class="memo-reply-form">
                                                <textarea class="form-control" placeholder="Masukan balasan disini" name="message"></textarea>
                                                <input type="hidden" name="memoId">
                                                <input type="hidden" name="status">
                                                <div class="reply-form-code captcha">
                                                    <label>Kode Verifikasi</label>
                                                    <span>
                                                        <img src="https://mahacuan.live/captcha/default?CUcZCpIp">
                                                    </span>
                                                    <a class="btn btn-sm btn-info mr-4" name="reload">
                                                        <i class="fas fa-sync-alt"></i>
                                                    </a>
                                                    <input class="input-code form-control" type="text"
                                                        name="captcha" placeholder="Kode Verifikasi">&nbsp;&nbsp;
                                                    <button type="submit" class="btn-custom-sm">Balas memo</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-add-memo" role="tabpanel"
                            aria-labelledby="nav-add-memo-tab">
                            <form id="formAddMemo">
                                <div class="memo-add">
                                    <div class="form-group">
                                        <label>Judul*</label>
                                        <input type="text" name="subject" id="subject" maxlength="25"
                                            placeholder="Judul Memo">
                                    </div>
                                    <div class="form-group">
                                        <label>Tipe*</label>
                                        <input type="text" name="type" id="type"
                                            placeholder="Tipe Masalah Memo">
                                    </div>
                                    <div class="form-group mt-4">
                                        <textarea name="message" id="messageAdd" placeholder="Pesan"></textarea>
                                    </div>
                                    <div class="form-group captcha">
                                        <div class="row">
                                            <div class="col-lg-2 d-flex align-items-center justify-content-start">
                                                <label>Kode Verifikasi:</label>
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="cap-img">
                                                    <div class="img-holder">
                                                        <span>
                                                            <img src="https://mahacuan.live/captcha/default?PW3oT0hu">
                                                        </span>
                                                        <a type="button" class="btn btn-sm btn-info mr-3"
                                                            name="reload">
                                                            <i class="fas fa-sync-alt"></i>
                                                        </a>
                                                    </div>
                                                    <div class="sent-holder">
                                                        <input class="input-code" type="text" name="captcha"
                                                            id="captchaAdd" placeholder="Kode Verifikasi"
                                                            required="">
                                                        <button class="btn-custom-sm" type="submit">Kirim</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="memo-desc">** Harap untuk selalu bersabar menunggu jawaban tiket dari operator,
                            untuk masalah yang urgent sekali bisa langsung menghubungi via livechat</div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="footer__provider">
            <div class="container-fluid">
                <div class="provider-header">PROVIDER</div>
                <div class="provider-holder">
                    <div class="provider-content">
                        <div class="provider-title">
                            <img title="Slot" alt="Slot"
                                src="https://images.linkcdn.cloud/global/icon-footer/Slot.png" width="20"
                                height="20">
                            <span>SLOT</span>
                        </div>
                        <div class="provider-logo">
                            <img alt="FASTSPIN" title="FASTSPIN"
                                src="https://images.linkcdn.cloud/global/logo-footer/slot/fastspin_footer.png"
                                width="100" height="50">
                            <img alt="Pragmatic Play" title="Pragmatic Play"
                                src="https://images.linkcdn.cloud/global/logo-footer/casino/plc_footer.png"
                                width="100" height="50">
                            <img alt="Spade Gaming" title="Spade Gaming"
                                src="https://images.linkcdn.cloud/global/logo-footer/slot/spd_footer.png"
                                width="100" height="50">
                            <img alt="N2Live Slot" title="N2Live Slot"
                                src="https://images.linkcdn.cloud/global/logo-footer/casino/nli_footer.png"
                                width="100" height="50">
                            <img alt="PG Soft" title="PG Soft"
                                src="https://images.linkcdn.cloud/global/logo-footer/slot/pgs_footer.png"
                                width="100" height="50">
                            <img alt="Fa Chai" title="Fa Chai"
                                src=" https://images.linkcdn.cloud/global/logo-footer/slot/fac_footer.webp "
                                width="100" height="50">
                            <img alt="JILI" title="JILI"
                                src=" https://images.linkcdn.cloud/global/logo-footer/slot/jli_footer.webp "
                                width="100" height="50">
                            <img alt="RED TIGER" title="RED TIGER"
                                src=" https://images.linkcdn.cloud/global/logo-footer/slot/rtr_footer.webp "
                                width="100" height="50">
                            <img alt="Afb Gaming" title="Afb Gaming"
                                src="https://images.linkcdn.cloud/global/logo-footer/slot/afg_footer.png"
                                width="100" height="50">
                            <img alt="AIS GAMING" title="AIS GAMING"
                                src="https://images.linkcdn.cloud/global/logo-footer/slot/aisg_footer.webp"
                                width="100" height="50">
                            <img alt="HC Game" title="HC Game"
                                src="https://images.linkcdn.cloud/global/logo-footer/slot/hcg_footer.png"
                                width="100" height="50">
                            <img alt="Advantplay" title="Advantplay"
                                src="https://images.linkcdn.cloud/global/logo-footer/slot/adv_footer.png"
                                width="100" height="50">
                            <img alt="JDB" title="JDB"
                                src="https://images.linkcdn.cloud/global/logo-footer/casino/jdb_footer.png"
                                width="100" height="50">
                            <img alt="NoLimit City" title="NoLimit City"
                                src="https://images.linkcdn.cloud/global/logo-footer/slot/nlc_footer.png"
                                width="100" height="50">
                            <img alt="Playstar" title="Playstar"
                                src="https://images.linkcdn.cloud/global/logo-footer/slot/pls_footer.png"
                                width="100" height="50">
                            <img alt="Joker Gaming" title="Joker Gaming"
                                src="https://images.linkcdn.cloud/global/logo-footer/slot/jok_footer.png"
                                width="100" height="50">
                            <img alt="Habanero" title="Habanero"
                                src="https://images.linkcdn.cloud/global/logo-footer/slot/hbn_footer.png"
                                width="100" height="50">
                            <img alt="CQ9 Gaming" title="CQ9 Gaming"
                                src="https://images.linkcdn.cloud/global/logo-footer/slot/cq9_footer.png"
                                width="100" height="50">
                            <img alt="Virtual Tech" title="Virtual Tech"
                                src="https://images.linkcdn.cloud/global/logo-footer/slot/vrt_footer.png"
                                width="100" height="50">
                            <img alt="Ameba" title="Ameba"
                                src="https://images.linkcdn.cloud/global/logo-footer/slot/amb_footer.png"
                                width="100" height="50">
                            <img alt="Top Trend Gaming" title="Top Trend Gaming"
                                src="https://images.linkcdn.cloud/global/logo-footer/slot/ttg_footer.png"
                                width="100" height="50">
                            <img alt="Microgaming" title="Microgaming"
                                src="https://images.linkcdn.cloud/global/logo-footer/slot/micro_logo.png"
                                width="100" height="50">
                            <img alt="Playtech Slot" title="Playtech Slot"
                                src="https://images.linkcdn.cloud/global/logo-footer/slot/pla_footer.png"
                                width="100" height="50">
                            <img alt="Play N Go" title="Play N Go"
                                src="https://images.linkcdn.cloud/global/logo-footer/slot/png_footer.png"
                                width="100" height="50">
                            <img alt="Hydako" title="Hydako"
                                src="https://images.linkcdn.cloud/global/logo-footer/slot/hyd_footer.png"
                                width="100" height="50">
                        </div>
                    </div>
                    <div class="provider-content">
                        <div class="provider-title">
                            <img title="Casino" alt="Casino"
                                src="https://images.linkcdn.cloud/global/icon-footer/Casino.png" width="20"
                                height="20">
                            <span>CASINO</span>
                        </div>
                        <div class="provider-logo">
                            <img alt="AFB CASINO" title="AFB CASINO"
                                src="https://images.linkcdn.cloud/global/logo-footer/casino/afc_footer.webp"
                                width="100" height="50">
                            <img alt="Pragmatic Play LC" title="Pragmatic Play LC"
                                src="https://images.linkcdn.cloud/global/logo-footer/casino/plc_footer.png"
                                width="100" height="50">
                            <img alt="WE CASINO" title="WE CASINO"
                                src="https://images.linkcdn.cloud/global/logo-footer/casino/wec_footer.webp"
                                width="100" height="50">
                            <img alt="GD88" title="GD88"
                                src="https://images.linkcdn.cloud/global/logo-footer/casino/gd8_footer.png"
                                width="100" height="50">
                            <img alt="WM Casino" title="WM Casino"
                                src="https://images.linkcdn.cloud/global/logo-footer/casino/wmc_footer.png"
                                width="100" height="50">
                            <img alt="OG Casino" title="OG Casino"
                                src="https://images.linkcdn.cloud/global/logo-footer/casino/ogs_footer.png"
                                width="100" height="50">
                            <img alt="Evolution" title="Evolution"
                                src="https://images.linkcdn.cloud/global/logo-footer/casino/evolution_footer.webp"
                                width="100" height="50">
                            <img alt="ALLBET" title="ALLBET"
                                src="https://images.linkcdn.cloud/global/logo-footer/casino/alb_footer.png"
                                width="100" height="50">
                            <img alt="Dream Gaming" title="Dream Gaming"
                                src="https://images.linkcdn.cloud/global/logo-footer/casino/drg_footer.png"
                                width="100" height="50">
                            <img alt="Asia Gaming" title="Asia Gaming"
                                src="https://images.linkcdn.cloud/global/logo-footer/casino/agc_footer.png"
                                width="100" height="50">
                            <img alt="Sexy Gaming" title="Sexy Gaming"
                                src="https://images.linkcdn.cloud/global/logo-footer/casino/seg_footer.png"
                                width="100" height="50">
                            <img alt="LG88" title="LG88"
                                src="https://images.linkcdn.cloud/global/logo-footer/casino/lg8_footer.png"
                                width="100" height="50">
                            <img alt="N2Live" title="N2Live"
                                src="https://images.linkcdn.cloud/global/logo-footer/casino/nli_footer.png"
                                width="100" height="50">
                        </div>
                    </div>
                    <div class="provider-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="provider-title">
                                    <img title="Sportsbook" alt="Sportsbook"
                                        src="https://images.linkcdn.cloud/global/icon-footer/Sport.png"
                                        width="20" height="20">
                                    <span>SPORTSBOOK</span>
                                </div>
                                <div class="provider-logo">
                                    <img alt="AFB88" title="AFB88"
                                        src="https://images.linkcdn.cloud/global/logo-footer/sports/afb_footer.png"
                                        width="100" height="50">
                                    <img alt="IA E-SPORT" title="IA E-SPORT"
                                        src="https://images.linkcdn.cloud/global/logo-footer/sports/iae_footer.png"
                                        width="100" height="50">
                                    <img alt="SBO SPORT" title="SBO SPORT"
                                        src="https://images.linkcdn.cloud/global/logo-footer/sports/sbo_footer.png"
                                        width="100" height="50">
                                    <img alt="CMD368" title="CMD368"
                                        src="https://images.linkcdn.cloud/global/logo-footer/sports/cmd_footer.png"
                                        width="100" height="50">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="provider-title">
                                    <img title="Arcade" alt="Arcade"
                                        src="https://images.linkcdn.cloud/global/icon-footer/Arcade.png"
                                        width="20" height="20">
                                    <span>ARCADE</span>
                                </div>
                                <div class="provider-logo">
                                    <img alt="Spaceman" title="Spaceman"
                                        src="https://images.linkcdn.cloud/global/logo-footer/casino/spaceman_footer.webp"
                                        width="100" height="50">
                                    <img alt="Joker Gaming" title="Joker Gaming"
                                        src="https://images.linkcdn.cloud/global/logo-footer/slot/jok_footer.png"
                                        width="100" height="50">
                                    <img alt="Spade Gaming" title="Spade Gaming"
                                        src="https://images.linkcdn.cloud/global/logo-footer/slot/spd_footer.png"
                                        width="100" height="50">
                                    <img alt="Playstar" title="Playstar"
                                        src="https://images.linkcdn.cloud/global/logo-footer/slot/pls_footer.png"
                                        width="100" height="50">
                                    <img alt="CQ9" title="CQ9"
                                        src="https://images.linkcdn.cloud/global/logo-footer/slot/cq9_footer.png"
                                        width="100" height="50">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="provider-content">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="provider-title">
                                    <img title="Live Game" alt="Live Game"
                                        src="https://images.linkcdn.cloud/global/icon-footer/Game Lain.png"
                                        width="20" height="20">
                                    <span>LIVE GAME</span>
                                </div>
                                <div class="provider-logo">
                                    <img alt="LIVE GAME" title="LIVE GAME"
                                        src="https://images.linkcdn.cloud/global/logo-footer/others/lvg_footer.png"
                                        width="100" height="50">
                                    <img alt="WS168" title="WS168"
                                        src="https://images.linkcdn.cloud/global/logo-footer/others/ws1_footer.png"
                                        width="100" height="50">
                                    <img alt="MIKI Gaming" title="MIKI Gaming"
                                        src="https://images.linkcdn.cloud/global/logo-footer/others/miki_footer.png"
                                        width="100" height="50">
                                    <img alt="SV388 Cockfight" title="SV388 Cockfight"
                                        src="https://images.linkcdn.cloud/global/logo-footer/others/sv3_footer.png"
                                        width="100" height="50">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="provider-title">
                                    <img title="Lottery" alt="Lottery"
                                        src="https://images.linkcdn.cloud/global/icon-footer/Lottery.png"
                                        width="20" height="20">
                                    <span>LOTTERY</span>
                                </div>
                                <div class="provider-logo">
                                    <img alt="4D" title="4D"
                                        src="https://images.linkcdn.cloud/global/logo-footer/lottery/tog_footer.png"
                                        width="100" height="50">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="provider-nav">
                    <a href="" class="provider-link">+21</a>
                    <a href="/news" class="provider-link">Berita</a>
                    <a href="/promotion" class="provider-link">Promosi</a>
                    <a href="/help#About" class="provider-link">Tentang Kami</a>
                    <a href="/contact" class="provider-link">Kontak Kami</a>
                    <a href="/help" class="provider-link">Persyaratan &amp; Ketentuan</a>
                    <a href="/help#FAQ" class="provider-link">FAQ</a>
                    <a href="/feedback" class="provider-link">Laporan ke Pusat</a>
                </div>
            </div>
        </div>
        <div class="footer__trademark">Copyright © 2021 - 2024
            mahacuan is an international registered trademark. All rights reserved.</div>
    </footer>


    <div class="footer-mobile">
        <a class="footer-item " href="https://mahacuan.live">
            <div class="footer-icon">
                <img src="https://mahacuan.live/themes/1/img/navigation/home.svg" width="60">
            </div>
            <div class="footer-title">Home</div>
        </a>
        <a class="footer-item" href="https://mahacuan.live/transaction">
            <div class="footer-icon">
                <img src="https://mahacuan.live/themes/1/img/navigation/deposit.svg" width="60">
            </div>
            <div class="footer-title">Deposit</div>
        </a>
        <a class="footer-item footer-login" href="#" data-toggle="modal" data-target="#categoryProvModal">
            <div class="footer-icon">
                <img src="https://mahacuan.live/themes/1/img/navigation/playgame.svg" width="60">
            </div>
            <div class="footer-title">Permainan</div>
        </a>
        <a class="footer-item " href="javascript:;" onclick="routeNav('/promotion')">
            <div class="footer-icon">
                <img src="https://mahacuan.live/themes/1/img/navigation/promo.svg" width="60">
            </div>
            <div class="footer-title">Promosi</div>
        </a>
        <a class="footer-item" target="_blank" rel="noreferrer" href="https://direct.lc.chat/15301668/">
            <div class="footer-icon">
                <img src="https://mahacuan.live/themes/1/img/navigation/livechat.svg" width="60">
            </div>
            <div class="footer-title">Live Chat</div>
        </a>
    </div>

    <div class="modal custom-popup fade" id="categoryProvModal" tabindex="-1"
        aria-labelledby="categoryProvModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="popup-category-modal">
                        <div class="category-modal-header">
                            <h4>Permainan</h4>
                        </div>
                        <div class="category-modal-template-1">
                            <a href="javascript:;" onclick="routeNav('/popular')">
                                <div class="category-item">
                                    <div class="icon">
                                        <img src="https://mahacuan.live/themes/1/img/navigation/popular.svg"
                                            width="50" height="50">
                                    </div>
                                    <div class="name">Popular</div>
                                </div>
                            </a>
                            <a href="javascript:;" onclick="routeNav('/sportsbook')">
                                <div class="category-item">
                                    <div class="icon">
                                        <img src="https://mahacuan.live/themes/1/img/navigation/sport.svg"
                                            width="50" height="50">
                                    </div>
                                    <div class="name">SPORTS</div>
                                </div>
                            </a>
                            <a href="javascript:;" onclick="routeNav('/slot')">
                                <div class="category-item">
                                    <div class="icon">
                                        <img src="https://mahacuan.live/themes/1/img/navigation/slot.svg"
                                            width="50" height="50">
                                    </div>
                                    <div class="name">SLOT</div>
                                </div>
                            </a>
                            <a href="javascript:;" onclick="routeNav('/casino')">
                                <div class="category-item">
                                    <div class="icon">
                                        <img src="https://mahacuan.live/themes/1/img/navigation/casino.svg"
                                            width="50" height="50">
                                    </div>
                                    <div class="name">CASINO</div>
                                </div>
                            </a>
                            <a href="javascript:;" onclick="routeNav('/lottery')">
                                <div class="category-item">
                                    <div class="icon">
                                        <img src="https://mahacuan.live/themes/1/img/navigation/lottery.svg"
                                            width="50" height="50">
                                    </div>
                                    <div class="name">LOTTERY</div>
                                </div>
                            </a>
                            <a href="javascript:;" onclick="routeNav('/arcade')">
                                <div class="category-item">
                                    <div class="icon">
                                        <img src="https://mahacuan.live/themes/1/img/navigation/arcade.svg"
                                            width="50" height="50">
                                    </div>
                                    <div class="name">ARCADE</div>
                                </div>
                            </a>
                            <a href="javascript:;" onclick="routeNav('/livegames')">
                                <div class="category-item">
                                    <div class="icon">
                                        <img src="https://mahacuan.live/themes/1/img/navigation/other.svg"
                                            width="50" height="50">
                                    </div>
                                    <div class="name">LIVE GAMES</div>
                                </div>
                            </a>
                        </div>
                        <div class="category-button">
                            <a class="btn-custom-sm" id="depositModal"
                                href="https://mahacuan.live/transaction#deposit">Tambah Dana</a>
                            <a class="btn-custom-sm" id="withdrawModal"
                                href="https://mahacuan.live/transaction#withdraw">Tarik Dana</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://mahacuan.live/themes/1/js/vendor.js"></script>
    <script src="https://mahacuan.live/themes/1/js/global.js?v=2.0.1520"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5-qrcode/2.1.2/html5-qrcode.min.js"
        integrity="sha512-G6jTq0R9t92sQXl2n3YSL8TqmgiT4dA8PgnO1NYjFxXO2Rp6YmgP4DSyItj22ZZ3a05u4x/SY/EGk6sZ9ji8CQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript" src="https://mahacuan.live/themes/1/vendor/dateranngepicker/daterangepicker.min.js">
    </script>
    <script type="text/javascript" src="https://mahacuan.live/themes/1/js/indeks.js?v=2.0.1520"></script>
    <script type="text/javascript" src="https://mahacuan.live/themes/1/js/vendor-auth.js"></script>
    <script type="text/javascript" src="https://mahacuan.live/themes/1/vendor/dataTables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://mahacuan.live/themes/1/vendor/dataTables/dataTables.responsive.min.js">
    </script>

    <script src="https://mahacuan.live/themes/1/vendor/jquery-validate/jquery.validate.min.js"></script>
    <script>
        window.addEventListener("popstate", (event) => {
            location.reload();
        });

        $("a[name=locale-switch]").on("click", function() {
            const locale = $(this).attr('data-locale')
            $.ajax({
                type: "POST",
                url: "https://mahacuan.live/locale",
                data: {
                    _token: "yxHv1nVEH7HaN6cMoKXmi6KLAPk5CYabMFGrelti",
                    locale: locale,
                },
                success: function(res) {
                    if (res) {
                        location.reload()
                    } else {
                        Swal.fire({
                            toast: true,
                            position: 'top-end',
                            icon: 'error',
                            title: "Locale not supported."
                        });
                    }
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $(this).scrollTop(0);
            $.ajax({
                type: "POST",
                url: "https://mahacuan.live/paymentService",
                data: {
                    _token: "yxHv1nVEH7HaN6cMoKXmi6KLAPk5CYabMFGrelti"
                },
                success: function(response) {
                    let wdTime = response.data.wd
                    let depoTime = response.data.depo
                    $("[id=withdrawTime]").text(wdTime)
                    $("[id=withdrawTimeBar]").attr('aria-valuenow', wdTime).width((wdTime / 15) * 100 +
                        "%")
                    $("[id=depositTime]").text(depoTime)
                    $("[id=depositTimeBar]").attr('aria-valuenow', depoTime).width((depoTime / 15) *
                        100 + "%")
                }
            });

            $(".routeTo").on("click", function() {
                const url = $(this).data("route")
                window.location.replace(url)
            });

            function getBalance() {
                $.post("https://mahacuan.live/transaction/checkBalance", {
                    _token: "yxHv1nVEH7HaN6cMoKXmi6KLAPk5CYabMFGrelti"
                }, (data) => {
                    let main = 0;
                    let prov = 0;
                    let mainWd = 0;
                    let pokerWd = 0;
                    $('span[name=provBalance]').text(prov.toFixed(2));
                    if ((data.success == true)) {
                        main += data.balance
                        window.mainBalance = data.commonWd
                        $.each(data.data, function(index, value) {
                            $('span[id=balance-' + index + ']').text(value.credit.toFixed(2));
                            if (value.lockedIn == true) {
                                $('#lockedIn' + index).show()
                                $('#lockedOut' + index).hide()
                                $('#locked' + index).hide()
                            }
                            if (value.lockedOut == true) {
                                $('#lockedOut' + index).show()
                                $('#lockedIn' + index).hide()
                                $('#locked' + index).hide()
                            }
                            if (value.lockedIn == true && value.lockedOut === true) {
                                $('#locked' + index).show()
                                $('#lockedIn' + index).hide()
                                $('#lockedOut' + index).hide()
                            }
                        });
                        mainWd += parseFloat(data.commonWd);
                        pokerWd += parseFloat(data.pokerWd);
                    }
                    $('span[id=balance-common-total]').text(data.common.toFixed(2));
                    $('span[id=balance-poker-total]').text(data.poker.toFixed(2));
                    $('span[name*=mainBalance]').text(main.toFixed(2));
                    $('span[id=mainDesc]').text(mainWd.toFixed(2));
                    $('span[id=pokerDesc]').text(pokerWd.toFixed(2));
                });
            }
            getBalance();
            $("a[name=refreshWallet]").on("click", function(e) {
                e.preventDefault();
                $('span[name*=mainBalance]').html(
                    '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>'
                    );
                getBalance();
            })
        });

        $('#pageLoadingBar').hide()
        window.onpopstate = function() {
            let path = window.location.pathname;
            routeNav(path);
        }

        function routeNav(path) {
            if (path == window.location.pathname) return;
            history.pushState(null, null, path);
            let url = "https://mahacuan.live" + window.location.pathname;
            if (path == '/') {
                window.location.replace("https://mahacuan.live")
                return false;
            }
            $(".header-form>a").removeClass('active')
            let elem = document.getElementById("pageLoadingBar");
            let width = 1;
            $.ajax({
                type: "GET",
                url: url,
                beforeSend: () => {
                    $('#pageLoadingBar').show()
                    let id = setInterval(frame, 100);

                    function frame() {
                        if (width >= 100) {
                            clearInterval(id);
                        } else {
                            width++;
                            elem.style.width = width + '%';
                        }
                    }
                },
                success: function(page) {
                    width = 100;
                    elem.style.width = width + '%';
                    $("main[id=main-route]").empty().append(page);
                    $("title").text($("#title-seo").text());
                    const script = $("scope-script").html()
                    $("scope-script").remove()
                    setTimeout(() => {
                        $("html, body").animate({
                            scrollTop: "0"
                        }, 1000);
                        $('#pageLoadingBar').hide()
                        elem.style.width = '1%';
                        $("custom-script").empty().append(script);
                        filterGameSelection('all')
                    }, 500);
                    let checkPath = path.split('/')
                }
            });
        }
    </script>
    <script>
        const html5QrCode = new Html5Qrcode( /* element id */ "reader");

        // File based scanning
        const fileinput = document.getElementById('qr-input-file');
        fileinput.addEventListener('change', e => {
            if (e.target.files.length == 0) {

                // No file selected, ignore
                return;
            }

            const imageFile = e.target.files[0];

            let ele = document.getElementById('error-message');

            // Scan QR Code
            html5QrCode.scanFile(imageFile, true)
                .then(qrCodeMessage => {

                    // success, use qrCodeMessage
                    document.getElementById("voucher_code").value = qrCodeMessage;
                    ele.style.display = "none";
                })
                .catch(err => {

                    // failure, handle it.
                    document.getElementById("voucher_code").value = "";
                    ele.innerHTML = `Error scanning file. Reason: ${err}`;
                    ele.style.display = "block";
                });
        });

        $("button[id=submitVoucher]").on('click', (e) => {
            e.preventDefault()
            $.ajax({
                type: "POST",
                url: "https://mahacuan.live/transaction/claimVoucher",
                data: {
                    _token: "yxHv1nVEH7HaN6cMoKXmi6KLAPk5CYabMFGrelti",
                    voucherCode: $("input[id=voucher_code]").val()
                },
                success: function(res) {
                    $("#voucherModal").modal('hide');
                    $("input[id=voucher_code]").val('');
                    Swal.fire({
                        icon: (res.success == true) ? 'success' : 'error',
                        html: res.message,
                        timerProgressBar: true,
                        showButtonConfirm: false,
                        timer: 3000
                    })
                }
            });
        });
    </script>
    <script type="text/javascript">
        var swiperSport = new Swiper('.sport-swiper', {
            slidesPerView: 4,
            spaceBetween: 20,
            breakpoints: {
                1600: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                },
                1280: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                }
            },
            navigation: {
                nextEl: ".navigation-next--sport",
                prevEl: ".navigation-prev--sport",
            },
        });
        var swiperSlot = new Swiper('.slot-swiper', {
            slidesPerView: 4,
            spaceBetween: 20,
            breakpoints: {
                1600: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                },
                1280: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                }
            },
            navigation: {
                nextEl: ".navigation-next--slot",
                prevEl: ".navigation-prev--slot",
            },
        });
        var swiperFishing = new Swiper('.fishing-swiper', {
            slidesPerView: 3,
            spaceBetween: 20,
            breakpoints: {
                1600: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                1440: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                1280: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                }
            },
            navigation: {
                nextEl: ".navigation-next--fishing",
                prevEl: ".navigation-prev--fishing",
            },
        });
        var swiperCasino = new Swiper('.casino-swiper', {
            slidesPerView: 4,
            spaceBetween: 10,
            breakpoints: {
                1920: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
                1600: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                1280: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                }
            },
            navigation: {
                nextEl: ".navigation-next--casino",
                prevEl: ".navigation-prev--casino",
            },
        });
        var swiperLottery = new Swiper('.lottery-swiper', {
            slidesPerView: 1,
            spaceBetween: 20,
            navigation: {
                nextEl: ".navigation-next--lottery",
                prevEl: ".navigation-prev--lottery",
            },
        });
    </script>

    <script>
        function maxInputAmount(wallet) {
            const amountWd = $("#withdrawAmount")
            const maxWd = parseFloat(amountWd.attr('max'))
            let walletAvail = parseFloat($(`#${wallet}Desc`).text())
            walletAvail = isNaN(walletAvail) ? 0 : walletAvail;
            if (walletAvail != 0) {
                if (walletAvail < maxWd) {
                    amountWd.attr('max', walletAvail)
                }
            }
        }

        window.showError = (title, message) => {
            return Swal.fire({
                icon: 'info',
                title: title,
                html: message,
                timerProgressBar: true,
                timer: 5000,
            });
        }

        $(".game-search>.form-control-sm").on("focus", function() {
            if ($(this).val().length == 0) {
                $(".game-search").width('100%');
                $(".form-control-sm").width('100%');
            }
        })

        $(".game-search>.form-control-sm").on("focusout", function() {
            if ($(this).val().length == 0) {
                $(".game-search").width('');
                $(".form-control-sm").width('');
            }
        })
    </script>
    <!-- Start of LiveChat (www.livechat.com) code -->
    <script>
        window.__lc = window.__lc || {};
        window.__lc.license = 15301668;;
        (function(n, t, c) {
            function i(n) {
                return e._h ? e._h.apply(null, n) : e._q.push(n)
            }
            var e = {
                _q: [],
                _h: null,
                _v: "2.0",
                on: function() {
                    i(["on", c.call(arguments)])
                },
                once: function() {
                    i(["once", c.call(arguments)])
                },
                off: function() {
                    i(["off", c.call(arguments)])
                },
                get: function() {
                    if (!e._h) throw new Error("[LiveChatWidget] You can't use getters before load.");
                    return i(["get", c.call(arguments)])
                },
                call: function() {
                    i(["call", c.call(arguments)])
                },
                init: function() {
                    var n = t.createElement("script");
                    n.async = !0, n.type = "text/javascript", n.src = "https://cdn.livechatinc.com/tracking.js",
                        t.head.appendChild(n)
                }
            };
            !n.__lc.asyncInit && e.init(), n.LiveChatWidget = n.LiveChatWidget || e
        }(window, document, [].slice))
    </script>
    <noscript><a href="https://www.livechat.com/chat-with/15301668/" rel="nofollow">Chat with us</a>, powered by <a
            href="https://www.livechat.com/?welcome" rel="noopener nofollow"
            target="_blank">LiveChat</a></noscript>
    <!-- End of LiveChat code -->








    <custom-script>
        <script type="text/javascript">
            const url = 'https://mahacuan.live/reload-captha'
            $('[name=reload]').click(function() {
                $.ajax({
                    type: 'GET',
                    url: url,
                    success: function(data) {
                        $(".captcha span").html(data.captcha);
                    }
                });
            });

            $("form[id=formAddMemo]").on("submit", function(e) {
                e.preventDefault()
                let data = {
                    _token: "yxHv1nVEH7HaN6cMoKXmi6KLAPk5CYabMFGrelti",
                    subject: $("input[name=subject]").val(),
                    type: $("input[name=type]").val(),
                    message: $("textarea[id=messageAdd]").val(),
                    captcha: $("input[id=captchaAdd]").val()
                }
                $.ajax({
                    type: "POST",
                    url: "https://mahacuan.live/memo/memo",
                    data: data,
                    success: function(res) {
                        if (res.success == true) {
                            $("#nav-all-tab").click()
                            Swal.fire({
                                toast: true,
                                position: 'top-end',
                                icon: 'success',
                                title: res.message
                            });
                            $('.form-control').removeClass('is-valid').removeClass('is-invalid')
                            $("form[id=memoReplyForm]")[0].reset()
                            memoTable.ajax.reload();
                        } else {
                            Swal.fire({
                                toast: true,
                                position: 'top-end',
                                icon: 'error',
                                title: res.message
                            });
                        }
                    }
                })
            })

            $("#addMemoButton").on("click", function(e) {
                e.preventDefault();
                $("#nav-add-memo-tab").click()
                $('[name=reload]').click()
            })

            let memoTable = $('#memo-table').DataTable({
                bAutoWidth: false,
                ajax: "https://mahacuan.live/memo/getMemo",
                columns: [{
                        data: 'created_at',
                        sortable: false,
                        render: function(data, type, row, meta) {
                            return new Date(data).toLocaleString('en-GB', {
                                year: 'numeric',
                                month: 'short',
                                day: 'numeric',
                                hour: 'numeric',
                                minute: 'numeric',
                                second: 'numeric'
                            })
                        }
                    },
                    {
                        data: 'type'
                    },
                    {
                        data: 'subject'
                    },
                    {
                        data: 'status',
                        render: function(data) {
                            const icon = {
                                1: `<div class="table-status approved">New</div>`,
                                2: `<div class="table-status approved">Replied</div>`,
                                3: `<div class="table-status approved">New</div>`,
                                4: `<div class="table-status bg-info">Read</div>`
                            }
                            return icon[data];
                        }
                    },
                ],
            });

            $("#nav-all-tab").on('click', function(e) {
                memoTable.draw()
            })

            $('#memo-table tbody').on('click', 'tr', function() {
                $("#memoViewReply").html("")
                getDetailMemo(memoTable.row(this).data().id)
                let rowData = memoTable.row(this).data()
                memoTable.row(this).data({
                    id: rowData.id,
                    subject: rowData.subject,
                    type: rowData.type,
                    status: 4,
                    created_at: rowData.created_at
                })
            });

            $("form[id=memoReplyForm]").validate({
                onkeyup: false,
                rules: {
                    message: {
                        required: true
                    },
                    captcha: {
                        required: true
                    }
                },
                messages: {
                    message: {
                        required: "Message wajib diisi.",
                    },
                    captcha: {
                        required: "Captcha wajib diisi.",
                    },
                },
                errorPlacement: function(error, element) {
                    let error_id = element.attr("id")
                    error.insertAfter($(`span[id=${error_id}-error]`))
                },
                highlight: function(element, errorClass) {
                    $(element).closest(".form-control").addClass("is-invalid");
                },
                unhighlight: function(element, errorClass) {
                    $(element).closest(".form-control").removeClass("is-invalid").addClass("is-valid");
                },
            });

            $("form[id=memoReplyForm]").on("submit", function(e) {
                e.preventDefault()
                let data = {
                    _token: "yxHv1nVEH7HaN6cMoKXmi6KLAPk5CYabMFGrelti",
                    memoId: $("input[name=memoId]").val(),
                    status: $("input[name=status]").val(),
                    message: $("textarea[name=message]").val(),
                    captcha: $("input[name=captcha]").val()
                }
                $.ajax({
                    type: "POST",
                    url: "https://mahacuan.live/memo/memo/reply",
                    data: data,
                    success: function(res) {
                        if (res.success == true) {
                            getDetailMemo($("input[name=memoId]").val())
                            Swal.fire({
                                toast: true,
                                position: 'top-end',
                                icon: 'success',
                                title: res.message
                            });
                            $('.form-control').removeClass('is-valid').removeClass('is-invalid')
                            $("form[id=memoReplyForm]")[0].reset()
                        } else {
                            Swal.fire({
                                toast: true,
                                position: 'top-end',
                                icon: 'error',
                                title: res.message
                            });
                        }
                    }
                });
            })


            function getDetailMemo(id) {
                let url = "https://mahacuan.live/memo/detail-:id-memo"
                url = url.replace(':id', id)
                $.ajax({
                    type: "GET",
                    url: url,
                    success: function(response) {
                        $('[name=reload]').click()
                        if (response.success == true) {
                            // let memoCount = parseInt($("#memoCountBadge").text());
                            // memoCount = (memoCount > 0) ? memoCount -1 : memoCount;
                            // parseInt($("#memoCountBadge").text(memoCount))
                            $("#nav-detail-tab").tab("show")
                            const data = response.data
                            $("input[name=memoId]").val(data.id)
                            $("input[name=status]").val(data.status)
                            $("[class=content-subject]").text(data.subject)
                            $("[class=content-desc]").text(data.content)
                            if (data.hasOwnProperty("reply_list")) {
                                let html = '';
                                $.each(data.reply_list, function(row, value) {
                                    html += memoReplyTemplate(data.member_id, value)
                                });
                                $("#memoViewReply").html(html)
                            } else {
                                $("#memoViewReply").html("")
                            }
                        } else {
                            alert("error")
                        }
                    }
                });
            }

            function memoReplyTemplate(memberId, value) {
                return `
    <div class="memo-view-reply">
        <div class="reply-top">
            <div class="reply-avatar"><i class="fas fa-user-circle"></i></div>
            <div class="reply-user-info">
                <div class="reply-user">
                    ${(value.replier_id == memberId) ? "You" : "Support"}
                </div>
                <div class="reply-days">
                    <i class="far fa-clock"></i>
                    ${value.diffHuman}
                </div>
            </div>
        </div>
        <div class="reply-desc">
            ${value.content}
        </div>
    </div>
`;
            }

            let memoBroadcastTable = $('#memo-broadcast-table').DataTable({
                ajax: "https://mahacuan.live/memo/getBroadcastMemo",
                order: [
                    [0, 'desc']
                ],
                columns: [{
                        data: 'created_at'
                    },
                    {
                        data: 'type'
                    },
                    {
                        data: 'subject'
                    },
                ],
            });
            $('#memo-broadcast-table tbody').on('click', 'tr', function() {
                Swal.fire({
                    title: memoBroadcastTable.row(this).data().subject,
                    html: memoBroadcastTable.row(this).data().content,
                    width: "50%"
                });
            });
        </script>
    </custom-script>

    <script type="text/javascript">
        var swiper = new Swiper('.mobile-category-swiper', {
            slidesPerView: 4,
            spaceBetween: 10,
            slidesPerGroup: 4,
            loopFillGroupWithBlank: true,
            navigation: {
                nextEl: ".navigation-next--category",
                prevEl: ".navigation-prev--category",
            },
        });
    </script>
    <div id="chat-widget-container"
        style="opacity: 1; visibility: visible; z-index: 2147483639; position: fixed; bottom: 0px; width: 84px; height: 84px; max-width: 100%; max-height: calc(100% + 0px); min-height: 0px; min-width: 0px; background-color: transparent; border: 0px; overflow: hidden; right: 0px; transition: none 0s ease 0s !important;">
        <iframe allow="autoplay; microphone *; camera *; display-capture *; picture-in-picture *; fullscreen *;"
            src="https://secure.livechatinc.com/customer/action/open_chat?license_id=15301668&amp;group=0&amp;embedded=1&amp;widget_version=3&amp;unique_groups=0"
            allowtransparency="true" id="chat-widget" name="chat-widget" title="LiveChat chat widget"
            scrolling="no"
            style="width: 100%; height: 100%; min-height: 0px; min-width: 0px; margin: 0px; padding: 0px; background-image: none; background-position: 0% 0%; background-size: initial; background-attachment: scroll; background-origin: initial; background-clip: initial; background-color: rgba(0, 0, 0, 0); border-width: 0px; float: none; color-scheme: normal; position: absolute; inset: 0px; transition: none 0s ease 0s !important; display: none; visibility: hidden;"></iframe><iframe
            allowtransparency="true" id="chat-widget-minimized" name="chat-widget-minimized"
            title="LiveChat chat widget" scrolling="no"
            style="width: 100%; height: 100%; min-height: 0px; min-width: 0px; margin: 0px; padding: 0px; background-image: none; background-position: 0% 0%; background-size: initial; background-attachment: scroll; background-origin: initial; background-clip: initial; background-color: rgba(0, 0, 0, 0); border-width: 0px; float: none; color-scheme: normal; display: block;"></iframe>
    </div>
</body>

</html>
