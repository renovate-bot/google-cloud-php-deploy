<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1\SkaffoldModules;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Git repository containing Skaffold Config modules.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.SkaffoldModules.SkaffoldGitSource</code>
 */
class SkaffoldGitSource extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Git repository the package should be cloned from.
     *
     * Generated from protobuf field <code>string repo = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $repo = '';
    /**
     * Optional. Relative path from the repository root to the Skaffold file.
     *
     * Generated from protobuf field <code>string path = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $path = '';
    /**
     * Optional. Git branch or tag to use when cloning the repository.
     *
     * Generated from protobuf field <code>string ref = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $ref = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $repo
     *           Required. Git repository the package should be cloned from.
     *     @type string $path
     *           Optional. Relative path from the repository root to the Skaffold file.
     *     @type string $ref
     *           Optional. Git branch or tag to use when cloning the repository.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Git repository the package should be cloned from.
     *
     * Generated from protobuf field <code>string repo = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getRepo()
    {
        return $this->repo;
    }

    /**
     * Required. Git repository the package should be cloned from.
     *
     * Generated from protobuf field <code>string repo = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setRepo($var)
    {
        GPBUtil::checkString($var, True);
        $this->repo = $var;

        return $this;
    }

    /**
     * Optional. Relative path from the repository root to the Skaffold file.
     *
     * Generated from protobuf field <code>string path = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Optional. Relative path from the repository root to the Skaffold file.
     *
     * Generated from protobuf field <code>string path = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->path = $var;

        return $this;
    }

    /**
     * Optional. Git branch or tag to use when cloning the repository.
     *
     * Generated from protobuf field <code>string ref = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Optional. Git branch or tag to use when cloning the repository.
     *
     * Generated from protobuf field <code>string ref = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRef($var)
    {
        GPBUtil::checkString($var, True);
        $this->ref = $var;

        return $this;
    }

}


