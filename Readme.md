## Usage

https://github.com/ggerganov/whisper.cpp

### 1.Start Container

``` bin/up ```

### 2.Download language model
List of models https://github.com/ggerganov/whisper.cpp/blob/master/models/README.md

``` bin/download_model base.en ```

### 3.Convert audio into text
<b>ggml-base.en.bin</b> need to change in command if you will download another language model

```bin/whisper -m /app/models/local/ggml-base.en.bin  /audios/simpleTextMessage.wav -oj -of /app/result/file```

result will be in /result/file.json