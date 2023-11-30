pipeline {
    agent any

    stages {
        stage('Clone sources') {
            steps {
                git 'https://github.com/YasinPiricci23/deneme.git'
            }
        }

        stage('SonarQube analysis') {
            
            def scannerHome = tool 'sonar';
            withSonarQubeEnv() {
                sh "${scannerHome}/bin/sonar-scanner -X" 
                //"-X" +
                //"-Dsonar.projectKey=argo-wf" +
                //"-Dsonar.sourceEncoding=UTF-8"
                }
            
        }
        stage("Quality gate") {
            steps {
                waitForQualityGate abortPipeline: true
            }
        }
    }
}
