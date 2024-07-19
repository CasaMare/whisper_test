curl https://api.assemblyai.com/v2/transcript \
--header "Authorization: "  \
--header "Content-Type: application/json" \
--data '{
"audio_url": "",
"speaker_labels": true,
"speakers_expected": 1
}'
